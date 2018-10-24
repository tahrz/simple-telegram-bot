# Simple PHP telegram bot library 
This library will help you, to create php telegram bot of any complexity. 
> v 0.1.5

**Add library to composer:**
```
composer require tahrz/simple-telegram-bot
```

**Add global variables, to config component**
```
define('BOT_TOKEN', '<YOUR_TOKEN>');
define('BASIC_API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');
define('WEBHOOK_URL', '<WEBHOOK_HTTPS_URL>');
```

#### How to use

To create an API request, use:
```
new \SimpleTelegramBot\Helpers\ConnectionHelper(ServiceType::class)->connect('<API_METHOD_NAME>', <assoc>);
```
This method will return answer from API in array form. `ServiceType::class`, may be `\SimpleTelegramBot\Services\FileGetContentsConnectionService` or `\SimpleTelegramBot\Services\CurlConnectionService`. **assoc** parameter has bool type, and will return by default `object` (false). In true case, it will return `array`.

> Also, you can use WebhookHelper, witch build under ConnectionService,
> with `getWebhook`, `setWebhook` API methods. Helpers use **ONLY** `CurlConnectionService()`

```
$setWebhook = \SimpleTelegramBot\Helpers\WebhookHelper::getWebhookInfo(<assoc>);
$getWebhook = \SimpleTelegramBot\Helpers\WebhookHelper::getWebhook(<assoc>);
$removeWebhook = \SimpleTelegramBot\Helpers\WebhookHelper::removeWebhook(<assoc>);
```