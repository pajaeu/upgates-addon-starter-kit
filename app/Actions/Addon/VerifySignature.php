<?php

declare(strict_types=1);

namespace App\Actions\Addon;

use Illuminate\Support\Facades\Http;

final class VerifySignature
{
    private const string SIGNATURE_KEY_PATH = 'https://files.upgates.com/addons/signature/api.signature.pub.key';

    public function handle(array $payload, string $signature): bool
    {
        $signaturePayload = implode(';', array_merge($payload, [
            'signature_token' => config('addon.signature_token'),
        ]));

        $signaturePublicKey = Http::timeout(5)
            ->throw()
            ->get(self::SIGNATURE_KEY_PATH)
            ->body();

        return openssl_verify($signaturePayload, base64_decode($signature), $signaturePublicKey, OPENSSL_ALGO_SHA256) === 1;
    }
}
