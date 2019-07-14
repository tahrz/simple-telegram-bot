<?php declare(strict_types=1);

namespace Tests\Unit\Update;

use Tests\LibraryTestCase;
use SimpleTelegramBot\Update\WebhookConfigurationHelper;

/**
 * Class WebhookConfigurationHelperTest
 *
 * @package Tests\Unit\Update
 */
class WebhookConfigurationHelperTest extends LibraryTestCase
{
    /**
     * @var WebhookConfigurationHelper
     */
    private static $webhookConfigurationHelper;

    protected function setUp(): void
    {
        parent::setUp();

        static::$webhookConfigurationHelper = new WebhookConfigurationHelper(static::$connectionService);
    }

    public function testCorrectTypeReturnedFromRemoveWebhook(): void
    {
        static::$connectionService->method('withArrayResponse')
            ->with('getWebhookInfo')
            ->willReturn(static::$fakedData['getWebhookInfo']['output']);

        $result = static::$webhookConfigurationHelper->getWebhookInfo();

        self::assertEquals(static::$fakedData['getWebhookInfo']['output'], $result);
        self::assertNotNull($result);
    }

    public function testCorrectTypeReturnedFromGetWebhookInfo(): void
    {
        static::$connectionService->method('withArrayResponse')
            ->with('setWebhook?url=')
            ->willReturn(static::$fakedData['deleteWebhook']['output']);

        $result = static::$webhookConfigurationHelper->removeWebhook();

        self::assertEquals(static::$fakedData['deleteWebhook']['output'], $result);
        self::assertNotNull($result);
    }
}