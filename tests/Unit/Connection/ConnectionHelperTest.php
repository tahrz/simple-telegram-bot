<?php declare(strict_types=1);

namespace Tests\Unit\Connection;

use Tests\LibraryTestCase;
use SimpleTelegramBot\Connection\ConnectionHelper;

/**
 * Class ConnectionHelperTest
 * @package Tests\Unit\Connection
 */
class ConnectionHelperTest extends LibraryTestCase
{
    /**
     * @var ConnectionHelper
     */
    private static $connectionHelper;

    protected function setUp(): void
    {
        parent::setUp();

        static::$connectionHelper = new ConnectionHelper(static::$connectionService);
    }

    public function testSuccessfulSendWithArrayResponse()
    {
        static::$connectionService->method('withArrayResponse')
            ->with('getMe')
            ->willReturn(static::$fakedData['getMe']['output']);

        $result = static::$connectionHelper->sendWithArrayResponse('getMe');

        self::assertEquals(static::$fakedData['getMe']['output'], $result);
        self::assertNotNull($result);
    }

    public function testSuccessfulSendWithObjectResponse()
    {
        static::$connectionService->method('withObjectResponse')
            ->with('getMe')
            ->willReturn((object)static::$fakedData['getMe']['output']);

        $result = static::$connectionHelper->sendWithObjectResponse('getMe');

        self::assertEquals((object)static::$fakedData['getMe']['output'], $result);
        self::assertNotNull($result);
    }
}