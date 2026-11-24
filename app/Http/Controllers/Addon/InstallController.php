<?php

declare(strict_types=1);

namespace App\Http\Controllers\Addon;

use App\Actions\Addon\InstallAction;
use App\Http\Requests\Addon\InstallRequest;
use Illuminate\Http\JsonResponse;

final class InstallController
{
    public function __invoke(InstallRequest $request, InstallAction $installAction): JsonResponse
    {
        return $installAction->handle($request->validated());
    }
}
