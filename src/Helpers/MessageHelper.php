<?php

namespace SimpleTelegramBot\Helpers;

/**
 * Class MessageHelper
 *
 * @package SimpleTelegramBot\Helpers
 */
class MessageHelper
{
    /**
     * @param int $chatId
     * @param string $message
     */
    public static function sendWithoutAnswer(int $chatId, string $message)
    {
        ConnectionHelper::sendWithoutAnswer('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }

    /**
     * @param int $chatId
     * @param string $message
     * @return array
     */
    public static function sendWithArrayResponse(int $chatId, string $message): array
    {
        return ConnectionHelper::sendWithArrayAnswer('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }

    /**
     * @param int $chatId
     * @param string $message
     * @return object
     */
    public static function sendWithObjectResponse(int $chatId, string $message): object
    {
        return ConnectionHelper::sendWithObjectAnswer('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }
}