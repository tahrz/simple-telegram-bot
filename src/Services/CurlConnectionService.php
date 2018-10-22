<?php

namespace SimpleTelegramBot\Services;

use SimpleTelegramBot\Contracts\IConnectionService;

/**
 * Class CurlConnectionService
 *
 * @package SimpleTelegramBot\Services
 */
class CurlConnectionService implements IConnectionService
{
    /**
     * @param string $action
     * @param bool $assoc
     * @return mixed
     */
    public static function connect(string $action, bool $assoc)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, BASIC_API_URL . $action);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        return json_decode($output, $assoc);
    }
}