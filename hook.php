<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . 'core/config/config.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($config['api_key'], ['username']);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
     echo $e->getMessage();
}