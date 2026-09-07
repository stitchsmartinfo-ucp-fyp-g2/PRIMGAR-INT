<?php
declare(strict_types=1);

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use RuntimeException;

final class RfqMailer
{
    /** @param array<string, mixed> $config */
    public function __construct(private array $config)
    {
    }

    /** @param array{name:string,email:string,phone:string,category:string,quantity:?int,details:string} $rfq */
    public function send(array $rfq): void
    {
        if (empty($this->config['enabled'])) {
            return;
        }
        if (!class_exists(PHPMailer::class)) {
            throw new RuntimeException('PHPMailer is not installed. Run composer install.');
        }

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = (string) $this->config['host'];
        $mail->SMTPAuth = true;
        $mail->Username = (string) $this->config['username'];
        $mail->Password = (string) $this->config['password'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = (int) $this->config['port'];
        $mail->CharSet = 'UTF-8';
        $mail->setFrom((string) $this->config['from_address'], (string) $this->config['from_name']);
        $mail->addAddress((string) $this->config['to_address'], (string) $this->config['to_name']);
        $mail->addReplyTo($rfq['email'], $rfq['name']);
        $mail->isHTML(true);
        $mail->Subject = 'New RFQ from ' . $rfq['name'];
        $mail->Body = $this->adminBody($rfq);
        $mail->AltBody = "New RFQ\nName: {$rfq['name']}\nEmail: {$rfq['email']}\nPhone: {$rfq['phone']}\nDetails: {$rfq['details']}";
        $mail->send();
    }

    private function adminBody(array $rfq): string
    {
        $escape = static fn (mixed $value): string => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
        return '<h2>New Primgar International RFQ</h2><table>'
            . '<tr><th>Name</th><td>' . $escape($rfq['name']) . '</td></tr>'
            . '<tr><th>Email</th><td>' . $escape($rfq['email']) . '</td></tr>'
            . '<tr><th>Phone</th><td>' . $escape($rfq['phone']) . '</td></tr>'
            . '<tr><th>Category</th><td>' . $escape($rfq['category']) . '</td></tr>'
            . '<tr><th>Quantity</th><td>' . $escape($rfq['quantity']) . '</td></tr>'
            . '<tr><th>Details</th><td>' . nl2br($escape($rfq['details'])) . '</td></tr></table>';
    }
}
