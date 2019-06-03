<?php

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Services\Connection\CurlConnectionService;

/**
 * Class ConnectionHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class ConnectionHelper
{
    /**
     * @param string $action
     */
    public static function sendWithoutAnswer(string $action)
    {
        new CurlConnectionService($action);
    }

    /**
     * @param string $action
     * @return array
     */
    public static function sendWithArrayAnswer(string $action): array
    {
        return (new CurlConnectionService($action))->asArray();
    }

    /**
     * @param string $action
     * @return object
     */
    public static function sendWithObjectAnswer(string $action): object
    {
        return (new CurlConnectionService($action))->asObject();
    }
}