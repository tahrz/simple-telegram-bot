<?php declare(strict_types=1);

namespace Tests\Unit\Connection;

use Tests\LibraryTestCase;

/**
 * Class ConnectionHelperTest
 * @package Tests\Unit\Connection
 */
class ConnectionHelperTest extends LibraryTestCase
{
    public function testSuccessfulSendWithArrayResponse()
    {
        $result = static::$connectionHelper->sendWithArrayAnswer('someAction');

        self::assertEquals([], $result);
        self::assertNotEquals((object)[], $result);
        self::assertNotNull($result);
    }

    public function testSuccessfulSendWithObjectResponse()
    {
        $result = static::$connectionHelper->sendWithObjectAnswer('someAction');

        self::assertEquals((object)[], $result);
        self::assertNotEquals([], $result);
        self::assertNotNull($result);
    }
}