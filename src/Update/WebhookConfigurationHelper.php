<?php declare(strict_types=1);

namespace SimpleTelegramBot\Helpers;

use SimpleTelegramBot\Connection\ConnectionService;

/**
 * Class WebhookHelper
 *
 * @package SimpleTelegramBot\Helpers
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
        $this->connectionService->init('setWebhook?url=' . WEBHOOK_URL);

        return $this->connectionService->withArrayResponse();
    }

    /**
     * @return array
     */
    public function removeWebhook(): array
    {
        $this->connectionService->init('setWebhook?url=');

        return $this->connectionService->withArrayResponse();
    }

    /**
     * @return array
     */
    public function getWebhookInfo(): array
    {
        $this->connectionService->init('getWebhookInfo');

        return $this->connectionService->withArrayResponse();
    }
}