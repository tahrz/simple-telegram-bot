<?php

namespace SimpleTelegramBot\Services;

/**
 * Class ConnectionService
 *
 * @package Brain\Helpers
 */
class ConnectionService
{
    /**
     * @var
     */
    public $connection;

    /**
     * ConnectionService constructor.
     * @param string $action
     * @throws \Exception
     */
    public function __construct(string $action)
    {
        $this->connection($action);
    }

    /**
     * @param string $action
     * @throws \Exception
     */
    public function connection(string $action)
    {
        $result = @file_get_contents(BASIC_API_URL . $action);

        if ($result) {
            $this->connection = json_decode($result, true);
        } else {
            $this->exceptionPush();
        }
    }

    /**
     * @throws \Exception
     */
    private function exceptionPush()
    {
        throw new \Exception('Invalid url request to Telegram API!');
    }
}