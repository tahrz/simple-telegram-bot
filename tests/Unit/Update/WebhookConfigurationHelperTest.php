<?php declare(strict_types=1);

namespace Tests\Unit\Update;

use Tests\LibraryTestCase;

/**
 * Class WebhookConfigurationHelperTest
 *
 * @package Tests\Unit\Update
 */
class WebhookConfigurationHelperTest extends LibraryTestCase
{
    public function testCorrectTypeReturnedFromSetWebhook()
    {
        $result = static::$connectionService->withArrayResponse();

        self::assertEquals([], $result);
        self::assertNotEquals((object)[], $result);
        self::assertNotNull($result);
    }

    public function testCorrectTypeReturnedFromRemoveWebhook()
    {
        $result = static::$connectionService->withArrayResponse();

        self::assertEquals([], $result);
        self::assertNotEquals((object)[], $result);
        self::assertNotNull($result);
    }

    public function testCorrectTypeReturnedFromGetWebhookInfo()
    {
        $result = static::$connectionService->withArrayResponse();

        self::assertEquals([], $result);
        self::assertNotEquals((object)[], $result);
        self::assertNotNull($result);
    }
}