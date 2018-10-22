<?php

namespace SimpleTelegramBot\Contracts;

/**
 * Class IConnectionService
 *
 * @package SimpleTelegramBot\Contracts
 */
interface IConnectionService
{
    /**
     * @param string $action
     * @param bool $assoc
     * @return mixed
     */
    public static function connect(string $action, bool $assoc);
}