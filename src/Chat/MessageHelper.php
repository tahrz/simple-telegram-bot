<?php

declare(strict_types=1);

namespace SimpleTelegramBot\Chat;

use SimpleTelegramBot\Connection\ConnectionService;

/**
 * @package SimpleTelegramBot\Chat
 */
class MessageHelper
{
    /**
     * @param ConnectionService $connectionService
     */
    public function __construct(private ConnectionService $connectionService)
    {
    }

    /**
     * @param int $chatId
     * @param string $message
     */
    public function sendWithoutResponse(int $chatId, string $message): void
    {
        $this->connectionService->init('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }

    /**
     * @param int $chatId
     * @param string $message
     * @return array
     */
    public function sendWithArrayResponse(int $chatId, string $message): array
    {
        return $this->connectionService->withArrayResponse('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }

    /**
     * @param int $chatId
     * @param string $message
     * @return object
     */
    public function sendWithObjectResponse(int $chatId, string $message): object
    {
        return $this->connectionService->withObjectResponse('sendMessage?chat_id=' . $chatId .'&text=' . $message);
    }
}