<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use SimpleTelegramBot\Connection\ConnectionService;

class LibraryTestCase extends TestCase
{
    /**
     * @var ConnectionService
     */
    protected static $connectionService;

    /**
     * @var array
     */
    protected static $fakedData;

    protected function setUp(): void
    {
        static::$fakedData = include 'data.php';

        static::$connectionService = $this->createMock(ConnectionService::class);
    }
}