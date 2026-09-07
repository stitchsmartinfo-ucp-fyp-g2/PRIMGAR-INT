<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\RfqRepository;
use App\Services\RfqMailer;

final class PageController
{
    public function __construct(
        private RfqRepository $repository,
        private RfqMailer $mailer,
    ) {
    }

    public function show(string $page): void
    {
        $csrfToken = $this->csrfToken();
        $successMessage = $_SESSION['flash_success'] ?? '';
        $errorMessage = $_SESSION['flash_error'] ?? '';
        unset($_SESSION['flash_success'], $_SESSION['flash_error']);

        $config = require __DIR__ . '/../../config/app.php';
        $db = \App\Core\Database::getInstance($config['database']);
        $model = new \App\Models\AdminModel($db);

        $faqs = $model->getAll('faqs');
        $testimonials = $model->getAll('testimonials');
        $services = $model->getAll('services');
        $products = $model->getAll('products');

        $all_images = $model->getAll('web_images');
        $web_images = [];
        if (is_array($all_images)) {
            foreach ($all_images as $img) {
                $web_images[$img['section_name']][] = $img;
            }
        }

        require __DIR__ . '/../Views/pages/' . $page . '.php';
    }

    public function submitRfq(): void
    {
        if (!hash_equals($this->csrfToken(), (string) ($_POST['csrf_token'] ?? ''))) {
            $this->redirectWithError('Your form session expired. Please try again.');
        }

        if (trim((string) ($_POST['website'] ?? '')) !== '') {
            $this->redirectWithError('Your submission could not be accepted.');
        }
        if (!$this->withinRateLimit()) {
            $this->redirectWithError('Too many requests. Please wait an hour before trying again.');
        }

        $category = (string) ($_POST['category'] ?? '');
        $categories = ['streetwear', 'fashionwear', 'casualwear', 'sportswear', 'workwear'];
        $quantity = filter_var($_POST['quantity'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 10, 'max_range' => 100000]]);
        $rfq = [
            'name' => $this->cleanField($_POST['name'] ?? '', 100),
            'email' => $this->cleanField($_POST['email'] ?? '', 254),
            'phone' => $this->cleanField($_POST['phone'] ?? '', 40),
            'category' => in_array($category, $categories, true) ? $category : '',
            'quantity' => $quantity ?: null,
            'details' => $this->cleanField($_POST['details'] ?? '', 3000),
        ];

        if ($rfq['name'] === '' || !filter_var($rfq['email'], FILTER_VALIDATE_EMAIL) || $rfq['details'] === '' || $rfq['category'] === '' || $rfq['quantity'] === null) {
            $this->redirectWithError('Please complete all required RFQ fields with a valid quantity of at least 10 pieces.');
        }

        try {
            $this->repository->create($rfq);
            try {
                $this->mailer->send($rfq);
            } catch (\Throwable $exception) {
                error_log('RFQ email failed after storage: ' . $exception->getMessage());
            }
            $_SESSION['flash_success'] = "Thank you, {$rfq['name']}! Your RFQ has been received. Our sales team will contact you within 12 hours.";
        } catch (\Throwable $exception) {
            error_log('RFQ submission failed: ' . $exception->getMessage());
            $_SESSION['flash_error'] = 'We could not submit your RFQ right now. Please try again or contact us on WhatsApp.';
        }

        header('Location: ./#rfq');
        exit;
    }

    public function submitChat(): void
    {
        header('Content-Type: application/json');
        
        if (!hash_equals($this->csrfToken(), (string) ($_POST['csrf_token'] ?? ''))) {
            http_response_code(403);
            echo json_encode(['success' => false, 'error' => 'Session expired. Please try again.']);
            exit;
        }

        if (trim((string) ($_POST['website'] ?? '')) !== '') {
            http_response_code(403);
            echo json_encode(['success' => false, 'error' => 'Submission rejected.']);
            exit;
        }

        if (!$this->withinRateLimit()) {
            http_response_code(429);
            echo json_encode(['success' => false, 'error' => 'Too many requests. Please wait before trying again.']);
            exit;
        }

        $email = $this->cleanField($_POST['email'] ?? '', 254);
        $whatsapp = $this->cleanField($_POST['whatsapp'] ?? '', 40);
        $message = $this->cleanField($_POST['message'] ?? '', 3000);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $whatsapp === '' || $message === '') {
            http_response_code(400);
            echo json_encode(['success' => false, 'error' => 'Please provide a valid email, WhatsApp number, and message.']);
            exit;
        }

        $chatData = [
            'name' => 'Chatbot User',
            'email' => $email,
            'phone' => $whatsapp,
            'category' => 'chatbot',
            'quantity' => null,
            'details' => $message,
        ];

        try {
            $this->repository->create($chatData);
            try {
                $this->mailer->send($chatData);
            } catch (\Throwable $exception) {
                error_log('Chat email failed after storage: ' . $exception->getMessage());
            }
            echo json_encode(['success' => true, 'message' => 'Thank you! We have received your message.']);
        } catch (\Throwable $exception) {
            error_log('Chat submission failed: ' . $exception->getMessage());
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => 'Could not send message right now.']);
        }
        exit;
    }

    private function csrfToken(): string
    {
        return $_SESSION['csrf_token'] ??= bin2hex(random_bytes(32));
    }

    private function redirectWithError(string $message): never
    {
        $_SESSION['flash_error'] = $message;
        header('Location: ./#rfq');
        exit;
    }

    private function cleanField(mixed $value, int $maximumLength): string
    {
        $value = trim((string) $value);
        return function_exists('mb_substr') ? mb_substr($value, 0, $maximumLength) : substr($value, 0, $maximumLength);
    }

    private function withinRateLimit(): bool
    {
        $now = time();
        $attempts = array_filter($_SESSION['rfq_attempts'] ?? [], static fn (int $time): bool => $time > $now - 3600);
        if (count($attempts) >= 5) {
            $_SESSION['rfq_attempts'] = $attempts;
            return false;
        }
        $attempts[] = $now;
        $_SESSION['rfq_attempts'] = $attempts;
        return true;
    }
}
