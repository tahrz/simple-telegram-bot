<?php declare(strict_types=1);

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
    public static function setWebhook(): array
    {
        return ConnectionHelper::sendWithArrayAnswer('setWebhook?url=' . WEBHOOK_URL);
    }

    /**
     * @return array
     */
    public static function removeWebhook(): array
    {
        return ConnectionHelper::sendWithArrayAnswer('setWebhook?url=');
    }

    /**
     * @return array
     */
    public static function getWebhookInfo(): array
    {
        return ConnectionHelper::sendWithArrayAnswer('getWebhookInfo');
    }
}