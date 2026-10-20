<?php

declare(strict_types=1);

namespace App\Factories;

use App\Models\Store;
use Codetiv\Upgates\Sdk\Upgates;
use InvalidArgumentException;

final class UpgatesClientFactory
{
    public static function make(string $apiUrl, string $apiLogin, string $apiKey): Upgates
    {
        $host = parse_url($apiUrl, PHP_URL_HOST);

        if (! is_string($host) || ! preg_match('/^(?<storeName>[^.]+)\.admin\.(?<serverMark>[^.]+)\.upgates\.com$/', $host, $matches)) {
            throw new InvalidArgumentException("Unable to parse store name and server mark from URL: {$apiUrl}");
        }

        return new Upgates(
            storeName: $matches['storeName'],
            serverMark: $matches['serverMark'],
            apiLogin: $apiLogin,
            apiKey: $apiKey,
        );
    }

    public static function makeFromStore(Store $store): Upgates
    {
        return self::make($store->api_url, $store->api_user, $store->api_key);
    }
}
