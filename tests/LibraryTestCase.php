<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use SimpleTelegramBot\Connection\ConnectionHelper;
use SimpleTelegramBot\Connection\ConnectionService;

class LibraryTestCase extends TestCase
{
    /**
     * @var ConnectionHelper
     */
    protected static $connectionHelper;

    /**
     * @var ConnectionService
     */
    protected static $connectionService;

    protected function setUp(): void
    {
        static::$connectionService = $this->getMockBuilder(ConnectionService::class)
            ->setMethods(['withArrayResponse', 'withObjectResponse', 'init'])
            ->getMock();

        static::$connectionHelper = new ConnectionHelper(self::$connectionService);
    }
}