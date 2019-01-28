<?php

namespace SimpleTelegramBot\Contracts;

/**
 * Class ConnectionServiceInterface
 *
 * @package SimpleTelegramBot\Contracts
 */
interface ConnectionServiceInterface
{
    /**
     * @return array
     */
    public function asArray(): array;

    /**
     * @return object
     */
    public function asObject(): object;
}