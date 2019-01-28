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
        return (new ConnectionHelper('setWebhook?url=' . WEBHOOK_URL))->asArray();
    }

    /**
     * @return array
     */
    public static function removeWebhook()
    {
        return (new ConnectionHelper('setWebhook?url='))->asArray();
    }

    /**
     * @return array
     */
    public static function getWebhookInfo()
    {
        return (new ConnectionHelper('getWebhookInfo'))->asArray();
    }
}