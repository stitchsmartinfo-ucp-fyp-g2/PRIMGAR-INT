# Primgar International

Core PHP MVC website for Primgar International. The existing visual pages are preserved, while request handling, RFQ storage, and email delivery are separated.

## Structure

- `index.php` — front controller and route definitions
- `app/Controllers` — HTTP/form orchestration
- `app/Models` — RFQ persistence (SQLite, with JSON fallback)
- `app/Services` — PHPMailer SMTP delivery
- `app/Views` — page templates and footer partial
- `config/app.php` — application configuration
- `storage/` — RFQ data (access is denied by Apache and the data filenames are hidden)

## Routes

- `/` — home page and RFQ form
- `/rfq` — RFQ form submission (`POST` only)
- `/fashion-wear.php`, `/sports-wear.php`, `/street-wear.php`, `/work-wear.php` — category pages

Apache uses `.htaccess` to send application routes to `index.php`; existing static files such as `index.css` and `images/*` are served normally.

## Mail setup

Do not send an app password in a chat or commit it to the project. Create a local `.env` file from `.env.example`, then add the Gmail app password locally:

```sh
cp .env.example .env
composer install
```

Set `MAIL_ENABLED=true`, then fill `MAIL_USERNAME` and `MAIL_PASSWORD`. The supplied Gmail defaults use STARTTLS on port 587. RFQs are stored even if mail delivery fails, so enquiries are not lost.

The project requires PHP 8.1+ and Composer. PHPMailer is installed by Composer from `phpmailer/phpmailer`.

## Security included

The RFQ endpoint uses CSRF protection, a hidden bot field, session-based submission throttling, server-side validation, and bounded field lengths. Keep `storage/.htaccess` on servers that use Apache; for a production deployment, configure the web server so only the public application files can be served.
