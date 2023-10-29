<?php

declare(strict_types=1);

namespace SimpleTelegramBot\Update;

use SimpleTelegramBot\Connection\ConnectionService;

/**
 * @package SimpleTelegramBot\Update
 */
class WebhookConfigurationHelper
{
    /**
     * @param ConnectionService $connectionService
     */
    public function __construct(private ConnectionService $connectionService)
    {
    }

    /**
     * @return array
     */
    public function setWebhook(): array
    {
        return $this->connectionService->withArrayResponse('setWebhook?url=' . WEBHOOK_URL);
    }

    /**
     * @return array
     */
    public function removeWebhook(): array
    {
        return $this->connectionService->withArrayResponse('setWebhook?url=');
    }

    /**
     * @return array
     */
    public function getWebhookInfo(): array
    {
        return $this->connectionService->withArrayResponse('getWebhookInfo');
    }
}