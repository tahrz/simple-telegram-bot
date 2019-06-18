<?php declare(strict_types=1);

namespace Tests\Unit\Connection;

use PHPUnit\Framework\TestCase;
use SimpleTelegramBot\Connection\ConnectionService;

/**
 * Class ConnectionHelperTest
 * @package Tests\Unit\Connection
 */
class ConnectionHelperTest extends TestCase
{
    /**
     * @var ConnectionService
     */
    protected static $connectionService;

    protected function setUp(): void
    {
        static::$connectionService = $this->getMockBuilder(ConnectionService::class)
            ->setMethods(['withArrayResponse', 'withObjectResponse', 'init'])
            ->getMock();
    }

    public function testSuccessfulSendWithArrayResponse()
    {
        self::assertEquals([], static::$connectionService->withArrayResponse());
    }

    public function testSuccessfulSendWithObjectResponse()
    {
        self::assertEquals((object)[], static::$connectionService->withObjectResponse());
    }
}