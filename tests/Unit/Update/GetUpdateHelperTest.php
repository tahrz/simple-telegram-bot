<?php declare(strict_types=1);

namespace Tests\Unit\Update;

use Tests\LibraryTestCase;
use SimpleTelegramBot\Update\GetUpdateHelper;

/**
 * Class GetUpdateHelperTest
 *
 * @package Tests\Unit\Update
 */
class GetUpdateHelperTest extends LibraryTestCase
{
    /**
     * @var GetUpdateHelper
     */
    private static $getUpdateHelper;

    protected function setUp(): void
    {
        parent::setUp();

        static::$getUpdateHelper = new GetUpdateHelper(static::$connectionService);
    }

    public function testSuccessfulSendWithArrayResponse()
    {
        static::$connectionService->method('withArrayResponse')
            ->with('getUpdates')
            ->willReturn(static::$fakedData['getUpdates']['output']);

        $result = static::$getUpdateHelper->asArray();

        self::assertEquals(static::$fakedData['getUpdates']['output'], $result);
        self::assertNotNull($result);
    }

    public function testSuccessfulSendWithObjectResponse()
    {
        static::$connectionService->method('withObjectResponse')
            ->with('getUpdates')
            ->willReturn((object)static::$fakedData['getUpdates']['output']);

        $result = static::$getUpdateHelper->asObject();

        self::assertEquals((object)static::$fakedData['getUpdates']['output'], $result);
        self::assertNotNull($result);
    }
}