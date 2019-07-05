<?php declare(strict_types=1);

namespace SimpleTelegramBot\Connection;

/**
 * Class ConnectionHelper
 *
 * @package SimpleTelegramBot\Connection
 */
class ConnectionHelper
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
     * @param string $action
     */
    public function sendWithoutResponse(string $action): void
    {
        $this->connectionService->init($action);
    }

    /**
     * @param string $action
     * @return array
     */
    public function sendWithArrayResponse(string $action): array
    {
        return $this->connectionService->withArrayResponse($action);
    }

    /**
     * @param string $action
     * @return object
     */
    public function sendWithObjectResponse(string $action): object
    {
        return $this->connectionService->withObjectResponse($action);
    }
}