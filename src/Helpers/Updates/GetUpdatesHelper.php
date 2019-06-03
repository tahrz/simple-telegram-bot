<?php declare(strict_types=1);

namespace SimpleTelegramBot\Helpers\Updates;

use SimpleTelegramBot\Helpers\ConnectionHelper;
use SimpleTelegramBot\Contracts\GetUpdateInterface;

/**
 * Class GetUpdatesHelper
 *
 * @package SimpleTelegramBot\Services\Updates
 */
class GetUpdatesHelper implements GetUpdateInterface
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