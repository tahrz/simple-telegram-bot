<?php declare(strict_types=1);

namespace Tests\Unit\Chat;

use Tests\LibraryTestCase;
use SimpleTelegramBot\Chat\MessageHelper;

/**
 * Class MessageHelperTest
 *
 * @package Tests\Unit\Chat
 */
class MessageHelperTest extends LibraryTestCase
{
    /**
     * @var MessageHelper
     */
    private static $messageHelper;

    protected function setUp(): void
    {
        parent::setUp();

        static::$messageHelper = new MessageHelper(static::$connectionService);
    }

    public function testSuccessfulSendWithArrayResponse()
    {
        static::$connectionService->method('withArrayResponse')
            ->with('sendMessage?chat_id=111112&text=simple test')
            ->willReturn(static::$fakedData['sendMessage']['output']);

        $result = static::$messageHelper->sendWithArrayResponse(111112, 'simple test');

        self::assertEquals(static::$fakedData['sendMessage']['output'], $result);
        self::assertNotNull($result);
    }

    public function testSuccessfulSendWithObjectResponse()
    {
        static::$connectionService->method('withObjectResponse')
            ->with('sendMessage?chat_id=111111&text=simple test')
            ->willReturn((object)static::$fakedData['sendMessage']['output']);

        $result = static::$messageHelper->sendWithObjectResponse(111111, 'simple test');

        self::assertEquals((object)static::$fakedData['sendMessage']['output'], $result);
        self::assertNotNull($result);
    }
}