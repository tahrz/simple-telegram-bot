<?php declare(strict_types=1);

namespace Tests\Unit\Update;

use Tests\LibraryTestCase;

/**
 * Class WebhookGetUpdateHelperTest
 *
 * @package Tests\Unit\Update
 */
class WebhookGetUpdateHelperTest extends LibraryTestCase
{
    public function testSuccessfulSendWithArrayResponse()
    {
        $result = static::$connectionService->withArrayResponse();

        self::assertEquals([], $result);
        self::assertNotEquals((object)[], $result);
        self::assertNotNull($result);
    }

    public function testSuccessfulSendWithObjectResponse()
    {
        $result = static::$connectionService->withObjectResponse();

        self::assertEquals((object)[], $result);
        self::assertNotEquals([], $result);
        self::assertNotNull($result);
    }
}