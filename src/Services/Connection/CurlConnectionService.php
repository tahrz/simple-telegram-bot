<?php declare(strict_types=1);

namespace SimpleTelegramBot\Services\Connection;

use SimpleTelegramBot\Contracts\ConnectionServiceInterface;

/**
 * Class CurlConnectionServiceInterface
 *
 * @package SimpleTelegramBot\Services
 */
final class CurlConnectionService implements ConnectionServiceInterface
{
    private $output;

    /**
     * CurlConnectionService constructor.
     *
     * @param string $action
     */
    public function __construct(string $action)
    {
        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, BASIC_API_URL . $action);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($connection);
        curl_close($connection);

        $this->output = $output;
    }

    /**
     * @return array
     */
    public function asArray(): array
    {
        return json_decode($this->output, true);
    }

    /**
     * @return object
     */
    public function asObject(): object
    {
        return json_decode($this->output, false);
    }
}