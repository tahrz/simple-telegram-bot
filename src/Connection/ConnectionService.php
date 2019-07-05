<?php declare(strict_types=1);

namespace SimpleTelegramBot\Connection;

/**
 * Interface ConnectionService
 *
 * @package SimpleTelegramBot\Connection
 */
interface ConnectionService
{
    /**
     * @param string $action
     */
    public function init(string $action): void;

    /**
     * @param string $action
     * @return array
     */
    public function withArrayResponse(string $action): array;

    /**
     * @param string $action
     * @return object
     */
    public function withObjectResponse(string $action): object;
}