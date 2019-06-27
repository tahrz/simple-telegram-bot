<?php declare(strict_types=1);

namespace SimpleTelegramBot\Connection;

/**
 * Class ConnectionHelper
 *
 * @package SimpleTelegramBot\Helpers
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
    public function sendWithoutAnswer(string $action): void
    {
        $this->connectionService->init($action);
    }

    /**
     * @param string $action
     * @return array
     */
    public function sendWithArrayAnswer(string $action): array
    {
        $this->connectionService->init($action);

        return $this->connectionService->withArrayResponse();
    }

    /**
     * @param string $action
     * @return object
     */
    public function sendWithObjectAnswer(string $action): object
    {
        $this->connectionService->init($action);

        return $this->connectionService->withObjectResponse();
    }
}