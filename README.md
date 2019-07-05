# Simple PHP telegram bot library 

<a href="https://packagist.org/packages/tahrz/simple-telegram-bot">![simple-telegram-bot](https://img.shields.io/packagist/dt/tahrz/simple-telegram-bot.svg?style=for-the-badge)</a>

This library will help you, to create php telegram bot of any complexity. 
> **v 1.3.4**

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
// create instance of ConnectionHelper
$connectionHelper = new ConnectionHelper($connectionService);

// make connection without answer
$connectionHelper->sendWithoutResponse('<API_METHOD_NAME>');

// make connection with array answer type
$arrayResult = $connectionHelper->sendWithArrayResponse('<API_METHOD_NAME>'); 

// make connection with object anaswer type
$objectResult = $connectionHelper->sendWithObjectResponse('<API_METHOD_NAME>'); 
```

> Also, you can use `webhookConfigurationHelper`, witch build under `ConnectionService`,
> with `getWebhook`, `setWebhook` API methods. Helpers use **ONLY** `CurlConnectionService()`

```php
// create instance of WebhookConfigurationHelper
$webhookConfigurationHelper = new WebhookConfigurationHelper($connectionService);

// get webhook info
$setWebhook = $webhookConfigurationHelper->getWebhookInfo();

// set new webhook
$getWebhook = $webhookConfigurationHelper->setWebhook();

// remove webhook
$removeWebhook = $webhookConfigurationHelper->removeWebhook();
```
`setWebhook()` will set a webhook on your `WEBHOOK_URL` url.

> For getting Updates with or without webhook, you can use
```php
// create instance of WebhookGetUpdateHelper
$webhookUpdateHelper = new WebhookGetUpdateHelper();

// create instance of GetUpdateHelert
$getUpdateHelper = new GetUpdateHelert($connectionService);

// work only if you add webhook
$updatesWithWebhookAsArray = $webhookUpdateHelper->asArray();
$updatesWithWebhookAsObject = $webhookUpdateHelper->asObject();

// work only without webhook
$updatesWithoutWebhook = $getUpdateHelper->asArray();
$updatesWithoutWebhook = $getUpdateHelper->asObject();
```
You always can choose, what type of data, you need to return, `array` or `object` or even **do not return you any data**.

> For sending messages, you can use a `MessageHelper`
```php
// create instance of MessageHelper
$messageHelper = new MessageHelper($connectionService);

// send message without response
$messageHelper->sendWithoutResponse(<CHAT_ID>, '<MESSAGE>')

// send message with array response type
$messageSendWithArrayResponse = $messageHelper->sendWithArrayResponse(<CHAT_ID>, '<MESSAGE>')

// send message with object response type
$messageSendWithObjectResponse = $messageHelper->sendWithObjectResponse(<CHAT_ID>, '<MESSAGE>')