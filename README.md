# Simple PHP telegram bot library 
This library will help you, to create php telegram bot of any complexity. 
> v 1.2.0

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
ConnectionHelper::sendWithoutAnswer('<API_METHOD_NAME>');
ConnectionHelper::sendWithArrayAnswer('<API_METHOD_NAME>'); 
ConnectionHelper::sendWithObjectAnswer('<API_METHOD_NAME>'); 
```
This method will return answer from API in array or object form.

> Also, you can use WebhookHelper, witch build under ConnectionService,
> with `getWebhook`, `setWebhook` API methods. Helpers use **ONLY** `CurlConnectionService()`

```
$setWebhook = WebhookHelper::getWebhookInfo();
$getWebhook = WebhookHelper::setWebhook();
$removeWebhook = WebhookHelper::removeWebhook();
```
`setWebhook()` will set a webhook on your `WEBHOOK_URL` url.

> For getting Updates with or without webhook, you can use
```
// work only if you add webhook
$updatesWithWebhook = (new GetUpdatesWithWebhookHelper())->as<Array or Object>;

// work only without webhook
$updatesWithoutWebhook = (new GetUpdatesHelper())->as<Array or Object>;
```
You always can choose, what type of data, you need to return, `array` or `object` or even do not return you any data.

> For sending messages, you can use a helper
```
$messageSendWithResponse = MessageHelper::sendWithArrayResponse(<CHAT_ID>, '<MESSAGE>')
$messageSendWithResponse = MessageHelper::sendWithObjectResponse(<CHAT_ID>, '<MESSAGE>')
$messageSendWithoutResponse = MessageHelper::sendWithoutResponse(<CHAT_ID>, '<MESSAGE>')