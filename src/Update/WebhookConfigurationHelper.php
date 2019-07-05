<?php declare(strict_types=1);

namespace SimpleTelegramBot\Update;

use SimpleTelegramBot\Connection\ConnectionService;

/**
 * Class WebhookConfigurationHelper
 *
 * @package SimpleTelegramBot\Update
 */
class WebhookConfigurationHelper
{
    /**
     * @var ConnectionService
     */
    private $connectionService;

    /**
     * ConnectionHelper constructor.
     *
     * @param ConnectionService $connectionService
     */
    public function __construct(ConnectionService $connectionService)
    {
        $this->connectionService = $connectionService;
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