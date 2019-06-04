# Simple PHP telegram bot library 

<a href="https://packagist.org/packages/tahrz/simple-telegram-bot">![simple-telegram-bot](https://img.shields.io/packagist/dt/tahrz/simple-telegram-bot.svg?style=for-the-badge)</a>

This library will help you, to create php telegram bot of any complexity. 
> v 1.2.0

**Add library to composer:**
```
composer require tahrz/simple-telegram-bot
```

**Add global variables, to config component**
```php
define('BOT_TOKEN', '<YOUR_TOKEN>');
define('BASIC_API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');
define('WEBHOOK_URL', '<WEBHOOK_HTTPS_URL>');
```

#### How to use

To create an API request, use:
```php
ConnectionHelper::sendWithoutAnswer('<API_METHOD_NAME>');
ConnectionHelper::sendWithArrayAnswer('<API_METHOD_NAME>'); 
ConnectionHelper::sendWithObjectAnswer('<API_METHOD_NAME>'); 
```
This method will return answer from API in array or object form.

> Also, you can use WebhookHelper, which construct under ConnectionService,
> with `getWebhook`, `setWebhook` API methods. Helpers use **ONLY** `CurlConnectionService()`

```php
$setWebhook = WebhookHelper::getWebhookInfo();
$getWebhook = WebhookHelper::setWebhook();
$removeWebhook = WebhookHelper::removeWebhook();
```
`setWebhook()` will set a webhook on your `WEBHOOK_URL` url.

> For getting Updates with or without webhook, you can use
```php
// work only if you add webhook
$updatesWithWebhookArray = (new GetUpdatesWithWebhookHelper())->asArray();
$updatesWithWebhookObject = (new GetUpdatesWithWebhookHelper())->asObjecct();

// work only without webhook
$updatesWithoutWebhookArray = (new GetUpdatesHelper())->asArray();
$updatesWithoutWebhookObject = (new GetUpdatesHelper())->asObject();
```
You always can choose, what type of data, you need to return, `array` or `object` or even do not return you any data.

> For sending messages, you can use a helper
```php
$messageSendWithArrayResponse = MessageHelper::sendWithArrayResponse(<CHAT_ID>, '<MESSAGE>')
$messageSendWithObjectResponse = MessageHelper::sendWithObjectResponse(<CHAT_ID>, '<MESSAGE>')
$messageSendWithoutResponse = MessageHelper::sendWithoutResponse(<CHAT_ID>, '<MESSAGE>')
