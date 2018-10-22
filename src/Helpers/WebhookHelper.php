<?php

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Services\CurlConnectionService;

/**
 * Class WebhookHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class WebhookHelper
{
    /**
     * @param bool $assoc
     * @return mixed
     */
    public static function setWebhook(bool $assoc = false)
    {
        return CurlConnectionService::connect('setWebhook?url=' . WEBHOOK_URL, $assoc);
    }

    /**
     * @param bool $assoc
     * @return mixed
     */
    public static function removeWebhook(bool $assoc = false)
    {
        return CurlConnectionService::connect('setWebhook?url=', $assoc);
    }

    /**
     * @param bool $assoc
     * @return mixed
     */
    public static function getWebhookInfo(bool $assoc = false)
    {
        return CurlConnectionService::connect('getWebhookInfo', $assoc);
    }
}