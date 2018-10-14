<?php

namespace Brain\Helpers;

use SimpleTelegramBot\Services\ConnectionService;

/**
 * Class WebhookHelper
 *
 * @package Brain\Helpers
 */
class WebhookHelper
{
    /**
     * @return ConnectionService
     * @throws \Exception
     */
    public static function setWebhook()
    {
        return new ConnectionService('setWebhook?url=' . WEBHOOK_URL);
    }

    /**
     * @return ConnectionService
     * @throws \Exception
     */
    public static function getWebhook()
    {
        return new ConnectionService('getWebhookInfo');
    }

    /**
     * @return ConnectionService
     * @throws \Exception
     */
    public static function removeWebhook()
    {
        return new ConnectionService('setWebhook?=');
    }
}
