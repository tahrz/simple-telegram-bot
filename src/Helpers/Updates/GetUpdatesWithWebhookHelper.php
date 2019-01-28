<?php declare(strict_types=1);

namespace SimpleTelegramBot\Helpers\Updates;

use SimpleTelegramBot\Contracts\GetUpdateInterface;

/**
 * Class GetUpdatesWithWebhookHelper
 *
 * @package SimpleTelegramBot\Services\Updates
 */
class GetUpdatesWithWebhookHelper implements GetUpdateInterface
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
        return json_decode($this->update, false);
    }
}