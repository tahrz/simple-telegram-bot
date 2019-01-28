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
     * CurlConnectionServiceInterface constructor.
     *
     * @param string $action
     */
    public function __construct(string $action)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, BASIC_API_URL . $action);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

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