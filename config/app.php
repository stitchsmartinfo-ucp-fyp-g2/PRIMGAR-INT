<?php
declare(strict_types=1);

$environment = [];
$envFile = dirname(__DIR__) . '/.env';
if (is_file($envFile)) {
    $environment = parse_ini_file($envFile, false, INI_SCANNER_RAW) ?: [];
}
$env = static fn (string $key, string $default = ''): string => (string) ($_ENV[$key] ?? getenv($key) ?: $environment[$key] ?? $default);

return [
    'storage_path' => dirname(__DIR__) . '/storage',
    'database' => [
        'host' => $env('DB_HOST', '127.0.0.1'),
        'name' => $env('DB_NAME', 'hasshwears'),
        'user' => $env('DB_USER', 'root'),
        'pass' => $env('DB_PASS', ''),
    ],
    'mail' => [
        'enabled' => filter_var($env('MAIL_ENABLED', 'false'), FILTER_VALIDATE_BOOL),
        'host' => $env('MAIL_HOST', 'smtp.gmail.com'),
        'port' => (int) $env('MAIL_PORT', '587'),
        'username' => $env('MAIL_USERNAME'),
        'password' => $env('MAIL_PASSWORD'),
        'from_address' => $env('MAIL_FROM_ADDRESS', 'primgarinternational@gmail.com'),
        'from_name' => $env('MAIL_FROM_NAME', 'Primgar International'),
        'to_address' => $env('MAIL_TO_ADDRESS', 'primgarinternational@gmail.com'),
        'to_name' => $env('MAIL_TO_NAME', 'Primgar International Sales'),
    ],
];
