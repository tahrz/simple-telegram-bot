<?php declare(strict_types=1);

namespace SimpleTelegramBot\Contracts;

/**
 * Class GetUpdateInterface
 *
 * @package SimpleTelegramBot\Contracts
 */
interface GetUpdateInterface
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