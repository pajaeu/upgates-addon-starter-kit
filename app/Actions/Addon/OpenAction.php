<?php

declare(strict_types=1);

namespace App\Actions\Addon;

use App\Models\Store;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\URL;

final readonly class OpenAction
{
    public function __construct(private VerifySignature $verifySignature) {}

    public function handle(array $data): JsonResponse
    {
        if (! $this->verifySignature->handle([
            'token' => $data['token'],
            'time' => $data['time'],
        ], $data['signature_v2'])) {
            return response()->json([
                'error' => true,
                'message' => 'Failed to verify signature.',
            ], 401);
        }

        $store = Store::query()
            ->where('token', $data['token'])
            ->first();

        if (! $store) {
            return response()->json([
                'error' => true,
                'message' => 'Store not found.',
            ], 400);
        }

        if (! $store->users()->exists()) {
            return response()->json([
                'error' => true,
                'message' => 'No user found for this store.',
            ], 400);
        }

        $url = URL::temporarySignedRoute('addon.login', now()->addMinutes(5), [
            'token' => $store->token,
        ]);

        return response()->json([
            'url' => $url,
            'type' => 'redirect',
        ]);
    }
}
