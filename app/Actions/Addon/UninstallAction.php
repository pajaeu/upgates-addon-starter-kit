<?php

declare(strict_types=1);

namespace App\Actions\Addon;

use App\Models\Store;
use Illuminate\Http\JsonResponse;

final readonly class UninstallAction
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
                'error' => false,
            ]);
        }

        $store->delete();

        return response()->json([
            'error' => false,
        ]);
    }
}
