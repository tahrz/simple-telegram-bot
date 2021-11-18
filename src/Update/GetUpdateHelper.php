<?php

declare(strict_types=1);

namespace SimpleTelegramBot\Update;

use SimpleTelegramBot\Connection\ConnectionService;

/**
 * @package SimpleTelegramBot\Update
 */
class GetUpdateHelper implements GetUpdate
{
    /**
     * @param ConnectionService $connectionService
     */
    public function __construct(private ConnectionService $connectionService)
    {
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