<?php

namespace SimpleTelegramBot\Helpers;

/**
 * Class WebhookHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class WebhookHelper
{
    /**
     * @return array
     */
    public static function setWebhook()
    {
        return ConnectionHelper::sendWithArrayAnswer('setWebhook?url=' . WEBHOOK_URL);
    }

    /**
     * @return array
     */
    public static function removeWebhook()
    {
        return ConnectionHelper::sendWithArrayAnswer('setWebhook?url=');
    }

    /**
     * @return array
     */
    public static function getWebhookInfo()
    {
        return ConnectionHelper::sendWithArrayAnswer('getWebhookInfo');
    }
}