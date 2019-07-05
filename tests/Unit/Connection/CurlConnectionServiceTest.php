<?php declare(strict_types=1);

namespace Tests\Unit\Connection;

use Tests\LibraryTestCase;

/**
 * Class CurlConnectionServiceTest
 *
 * @package Tests\Unit\Connection
 */
class CurlConnectionServiceTest extends LibraryTestCase
{
    public function testSuccessfulConnectWithArrayResponse()
    {
        $result = static::$connectionService->withArrayResponse('getMe');

        self::assertEquals([], $result);
        self::assertNotEquals((object)[], $result);
        self::assertNotNull($result);
    }

    public function testSuccessfulConnectWithObjectResponse()
    {
        $result = static::$connectionService->withObjectResponse('getMe');

        self::assertEquals((object)[], $result);
        self::assertNotEquals([], $result);
        self::assertNotNull($result);
    }
}