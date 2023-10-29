<?php

declare(strict_types=1);

namespace SimpleTelegramBot\Update;

/**
 * @package SimpleTelegramBot\Update
 */
interface GetUpdate
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