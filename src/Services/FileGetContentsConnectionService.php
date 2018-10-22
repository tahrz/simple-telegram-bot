<?php

namespace SimpleTelegramBot\Services;

use SimpleTelegramBot\Contracts\IConnectionService;

/**
 * Class FileGetContentsConnectionService
 *
 * @package Brain\Helpers
 */
class FileGetContentsConnectionService implements IConnectionService
{
    /**
     * @param string $action
     * @param bool $assoc
     * @return mixed
     * @throws \Exception
     */
    public static function connect(string $action, bool $assoc = false)
    {
        $result = @file_get_contents(BASIC_API_URL . $action);

        return static::exceptionCheck($result, $assoc);
    }

    /**
     * @throws \Exception
     */
    private static function exceptionPush()
    {
        throw new \Exception('Invalid url request to Telegram API!');
    }

    /**
     * @param mixed $result
     * @param bool $assoc
     * @return mixed
     * @throws \Exception
     */
    private static function exceptionCheck(string $result, bool $assoc)
    {
        if ($result) {
            return json_decode($result, $assoc);
        } else {
            static::exceptionPush();
        }
    }
}