<?php

declare(strict_types=1);

namespace App\Http\Controllers\Addon;

use App\Actions\VerifySignature;
use App\Http\Requests\Addon\UninstallRequest;
use App\Models\Store;
use Illuminate\Http\JsonResponse;

final class UninstallController
{
    public function __invoke(UninstallRequest $request, VerifySignature $verifySignature): JsonResponse
    {
        $data = $request->validated();

        if (! $verifySignature->handle([
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
