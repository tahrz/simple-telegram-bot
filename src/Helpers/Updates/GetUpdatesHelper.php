<?php declare(strict_types=1);

namespace SimpleTelegramBot\Services\Updates;

use SimpleTelegramBot\Helpers\ConnectionHelper;
use SimpleTelegramBot\Contracts\GetUpdateInterface;

/**
 * Class GetUpdatesHelper
 *
 * @package SimpleTelegramBot\Services\Updates
 */
class GetUpdatesHelper implements GetUpdateInterface
{
    /**
     * @var ConnectionHelper
     */
    private $update;

    /**
     * GetUpdatesHelper constructor.
     */
    public function __construct()
    {
        $this->update = (new ConnectionHelper('getUpdates'));
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        return $this->update->asArray();
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        return $this->update->asObject();
    }
}