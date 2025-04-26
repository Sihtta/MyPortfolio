<?php
if (file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env');
    define('MISTRAL_API_KEY', $env['MISTRAL_API_KEY'] ?? '');
} else {
    define('MISTRAL_API_KEY', '');
}

if (empty(MISTRAL_API_KEY)) {
    error_log('MISTRAL_API_KEY is not set in .env file');
}
