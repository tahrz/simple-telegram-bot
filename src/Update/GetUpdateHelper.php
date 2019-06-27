<?php declare(strict_types=1);

namespace SimpleTelegramBot\Helpers\Updates;

use SimpleTelegramBot\Contracts\GetUpdate;
use SimpleTelegramBot\Connection\ConnectionService;

/**
 * Class GetUpdatesHelper
 *
 * @package SimpleTelegramBot\Services\Updates
 */
class GetUpdateHelper implements GetUpdate
{
    /**
     * @var ConnectionService
     */
    private $connectionService;

    /**
     * ConnectionHelper constructor.
     *
     * @param ConnectionService $connectionService
     */
    public function __construct(ConnectionService $connectionService)
    {
        $this->connectionService = $connectionService;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        $this->connectionService->init('getUpdates');

        return $this->connectionService->withArrayResponse();
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        $this->connectionService->init('getUpdates');

        return $this->connectionService->withObjectResponse();
    }
}