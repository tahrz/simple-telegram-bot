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
    private static $connectionService;

    /**
     * ConnectionHelper constructor.
     *
     * @param ConnectionService $connectionService
     */
    public function __construct(ConnectionService $connectionService)
    {
        static::$connectionService = $connectionService;
    }

    /**
     * @param string $action
     */
    public static function sendWithoutAnswer(string $action): void
    {
        static::$connectionService->init($action);
    }

    /**
     * @param string $action
     * @return array
     */
    public static function sendWithArrayAnswer(string $action): array
    {
        static::$connectionService->init($action);

        return static::$connectionService->withArrayResponse();
    }

    /**
     * @param string $action
     * @return object
     */
    public static function sendWithObjectAnswer(string $action): object
    {
        static::$connectionService->init($action);

        return static::$connectionService->withObjectResponse();
    }
}