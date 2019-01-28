<?php

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Contracts\ConnectionServiceInterface;
use SimpleTelegramBot\Services\Connection\CurlConnectionService;

/**
 * Class ConnectionHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class ConnectionHelper
{
    /**
     * @var ConnectionServiceInterface
     */
    private $connectionService;

    /**
     * ConnectionHelper constructor.
     * @param string $action
     */
    public function __construct(string $action)
    {
        $this->connectionService = (new CurlConnectionService($action));
    }


    /**
     * @return array
     */
    public function asArray(): array
    {
        return $this->connectionService->asArray();
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        return $this->connectionService->asObject();
    }
}