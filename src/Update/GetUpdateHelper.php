<?php declare(strict_types=1);

namespace SimpleTelegramBot\Update;

use SimpleTelegramBot\Connection\ConnectionService;

/**
 * Class GetUpdateHelper
 *
 * @package SimpleTelegramBot\Update
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
        return $this->connectionService->withArrayResponse('getUpdates');
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        return $this->connectionService->withObjectResponse('getUpdates');
    }
}