<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController {
    private AdminModel $model;

    public function __construct(AdminModel $model) {
        $this->model = $model;
    }

    public function handleRequest(string $path): void {
        if ($path === '/admin/login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->login();
            return;
        }
        if ($path === '/admin/logout') {
            unset($_SESSION['admin_logged_in']);
            header('Location: /Primgar International/admin/login');
            return;
        }

        if ($path === '/admin/login') {
            $this->renderView('login', []);
            return;
        }

        // Require authentication for all other admin routes
        if (empty($_SESSION['admin_logged_in'])) {
            header('Location: /Primgar International/admin/login');
            return;
        }

        if ($path === '/admin' || $path === '/admin/dashboard') {
            $data = [
                'faqs' => $this->model->getAll('faqs'),
                'services' => $this->model->getAll('services'),
                'products' => $this->model->getAll('products'),
                'testimonials' => $this->model->getAll('testimonials'),
            ];
            $this->renderView('dashboard', $data);
            return;
        }

        // Simple POST handlers for adding content
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && str_starts_with($path, '/admin/add-')) {
            $this->handleAdd($path);
            return;
        }

        // Simple GET handler for deleting content
        if (str_starts_with($path, '/admin/delete-')) {
            $this->handleDelete($path);
            return;
        }

        // Fallback
        header('Location: /Primgar International/admin/dashboard');
    }

    private function login(): void {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($this->model->verifyUser($email, $password)) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: /Primgar International/admin/dashboard');
        } else {
            $this->renderView('login', ['error' => 'Invalid email or password']);
        }
    }

    private function handleAdd(string $path): void {
        $type = str_replace('/admin/add-', '', $path);
        
        $data = [];
        if ($type === 'faq') {
            $data = [
                'question' => $_POST['question'] ?? '',
                'answer' => $_POST['answer'] ?? '',
                'display_order' => (int)($_POST['display_order'] ?? 0)
            ];
            $this->model->insert('faqs', $data);
        } elseif ($type === 'testimonial') {
            $data = [
                'author' => $_POST['author'] ?? '',
                'position' => $_POST['position'] ?? '',
                'review' => $_POST['review'] ?? '',
                'initials' => $_POST['initials'] ?? '',
                'display_order' => (int)($_POST['display_order'] ?? 0)
            ];
            $this->model->insert('testimonials', $data);
        }
        
        header('Location: /Primgar International/admin/dashboard');
    }

    private function handleDelete(string $path): void {
        $type = str_replace('/admin/delete-', '', $path);
        $id = (int)($_GET['id'] ?? 0);
        if ($id > 0) {
            $table = $type . 's'; // e.g. faq -> faqs
            $this->model->delete($table, $id);
        }
        header('Location: /Primgar International/admin/dashboard');
    }

    private function renderView(string $view, array $data = []): void {
        extract($data);
        require __DIR__ . "/../Views/admin/{$view}.php";
    }
}
