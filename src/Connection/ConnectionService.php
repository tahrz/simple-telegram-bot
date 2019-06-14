<?php declare(strict_types=1);

namespace SimpleTelegramBot\Connection;

/**
 * Class ConnectionServiceInterface
 *
 * @package SimpleTelegramBot\Contracts
 */
interface ConnectionService
{
    /**
     * @param string $action
     */
    public function init(string $action): void;

    /**
     * @return array
     */
    public function withArrayResponse(): array;

    /**
     * @return object
     */
    public function withObjectResponse(): object;
}