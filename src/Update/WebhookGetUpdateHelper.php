<?php declare(strict_types=1);

namespace SimpleTelegramBot\Helpers\Updates;

use SimpleTelegramBot\Contracts\GetUpdate;

/**
 * Class GetUpdatesWithWebhookHelper
 *
 * @package SimpleTelegramBot\Services\Updates
 */
class WebhookGetUpdateHelper implements GetUpdate
{
    /**
     * @return array
     */
    public function asArray(): array
    {
        return json_decode(file_get_contents("php://input"), true);
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        return json_decode(file_get_contents("php://input"), false);
    }
}