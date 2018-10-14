# Simple PHP telegram bot library 
This library will help you, to create php telegram bot of any complexity. 
> v 0.1.0

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
new \SimpleTelegramBot\Services\ConnectionService('<API_METHOD_NAME>');
```
This method will return answer from API in array form. Or you will see error,
because <API_METHOD_NAME> is incorrect.

> Also, you can use WebhookHelper, witch build under ConnectionService,
> with `getWebhook`, `setWebhook` API methods.

```
$setWebhook = \SimpleTelegramBot\Helpers\WebhookHelper::setWebhook();
$getWebhook = \SimpleTelegramBot\Helpers\WebhookHelper::getWebhook();
$removeWebhook = \SimpleTelegramBot\Helpers\WebhookHelper::removeWebhook();
```