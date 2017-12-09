<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . 'core/config/config.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($config['api_key'], $config['username']);
    // Set webhook
    $result = $telegram->setWebhook($config['hook_url']);
    if($result->isOk()) {
        echo $result->getDescription();
    }
}
catch(Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e->getMessage();
}