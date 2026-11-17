<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\VerifySignature;
use App\Factories\UpgatesClientFactory;
use App\Http\Requests\InstallRequest;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\JsonResponse;

final class InstallController
{
    public function __invoke(InstallRequest $request, VerifySignature $verifySignature): JsonResponse
    {
        $data = $request->validated();

        if (! $verifySignature->handle([
            'token' => $data['token'],
            'apiUser' => $data['apiUser'],
            'apiKey' => $data['apiKey'],
            'apiUrl' => $data['apiUrl'],
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

        if ($store) {
            return response()->json([
                'error' => false,
            ]);
        }

        $store = Store::query()->create([
            'token' => $data['token'],
            'api_user' => $data['apiUser'],
            'api_key' => $data['apiKey'],
            'api_url' => $data['apiUrl'],
        ]);

        $client = UpgatesClientFactory::makeFromStore($store);

        $owner = $client->owner();

        if ($owner === []) {
            return response()->json([
                'error' => true,
                'message' => "Failed to retrieve store's owner.",
            ]);
        }

        $store->update([
            'billing_company' => $owner['company'],
            'billing_company_id' => $owner['company_number'],
            'billing_vat_id' => $owner['vat_number'],
            'billing_vat_country' => $owner['vat_country_id'],
            'billing_street' => $owner['street'],
            'billing_city' => $owner['city'],
            'billing_state' => $owner['state'],
            'billing_zip' => $owner['zip'],
            'billing_country' => $owner['country_id'],
        ]);

        $user = User::query()->updateOrCreate([
            'email' => $owner['email'],
        ], [
            'email' => $owner['email'],
            'name' => $owner['firstname'].' '.$owner['surname'],
        ]);

        $user->stores()->syncWithoutDetaching([$store->id]);

        $user->currentStore()->associate($store);

        $user->save();

        return response()->json([
            'error' => false,
        ]);
    }
}
