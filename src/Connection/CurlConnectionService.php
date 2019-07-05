<?php declare(strict_types=1);

namespace SimpleTelegramBot\Connection;

/**
 * Class CurlConnectionService
 *
 * @package SimpleTelegramBot\Connection
 */
final class CurlConnectionService implements ConnectionService
{
    /**
     * @var bool|string
     */
    private $output;

    /**
     * @param string $action
     */
    public function init(string $action): void
    {
        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, BASIC_API_URL . $action);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($connection);
        curl_close($connection);

        $this->output = $output;
    }

    /**
     * @param string $action
     * @return array
     */
    public function withArrayResponse(string $action): array
    {
        $this->init($action);

        return json_decode($this->output, true);
    }

    /**
     * @param string $action
     * @return object
     */
    public function withObjectResponse(string $action): object
    {
        $this->init($action);

        return json_decode($this->output, false);
    }
}