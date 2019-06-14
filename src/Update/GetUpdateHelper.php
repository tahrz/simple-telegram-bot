<?php declare(strict_types=1);

namespace SimpleTelegramBot\Helpers\Updates;

use SimpleTelegramBot\Contracts\GetUpdate;
use SimpleTelegramBot\Helpers\ConnectionHelper;

/**
 * Class GetUpdatesHelper
 *
 * @package SimpleTelegramBot\Services\Updates
 */
class GetUpdateHelper implements GetUpdate
{
    /**
     * @return array
     */
    public function asArray(): array
    {
        return ConnectionHelper::sendWithArrayAnswer('getUpdates');
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        return ConnectionHelper::sendWithObjectAnswer('getUpdates');
    }
}