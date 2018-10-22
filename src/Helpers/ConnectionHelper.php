<?php

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Contracts\IConnectionService;

/**
 * Class ConnectionHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class ConnectionHelper
{
    /**
     * @var IConnectionService
     */
    private $connectionService;

    /**
     * ConnectionHelper constructor.
     * @param IConnectionService $connectionService
     */
    public function __construct(IConnectionService $connectionService)
    {
        $this->connectionService = $connectionService;
    }

    /**
     * @param string $action
     * @param bool $assoc
     * @return mixed
     */
    public function connect(string $action, bool $assoc)
    {
        return $this->connectionService->connect($action, $assoc);
    }
}