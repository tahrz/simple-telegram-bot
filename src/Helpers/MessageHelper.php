<?php

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Services\CurlConnectionService;

/**
 * Class MessageHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class MessageHelper
{
    /**
     * @var int
     */
    private $dialogId;

    /**
     * MessageHelper constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->dialogId = $id;
    }

    /**
     * @param string $message
     * @param bool $assoc
     * @return mixed
     */
    public function send(string $message, bool $assoc)
    {
        $connectionService = new CurlConnectionService();
        $connection = new ConnectionHelper($connectionService);

        return $connection->connect('sendMessage?chat_id=' . $this->dialogId .'&text=' . $message, $assoc);
    }
}