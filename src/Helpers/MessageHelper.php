<?php

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Contracts\ConnectionServiceInterface;

/**
 * Class MessageHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class MessageHelper
{
    /**
     * @var ConnectionServiceInterface
     */
    private $connection;

    /**
     * MessageHelper constructor.
     *
     * @param int $chatId
     * @param string $message
     */
    public function __construct(int $chatId, string $message)
    {
        $this->connection = new ConnectionHelper('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }

    /**
     * @return array
     */
    public function sendWithArrayResponse(): array
    {
        return $this->connection->asArray();
    }

    /**
     * @return object
     */
    public function sendWithObjectResponse(): object
    {
        return $this->connection->asObject();
    }
}