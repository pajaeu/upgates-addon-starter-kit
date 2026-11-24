<?php

declare(strict_types=1);

namespace App\Http\Controllers\Addon;

use App\Actions\Addon\UninstallAction;
use App\Http\Requests\Addon\UninstallRequest;
use Illuminate\Http\JsonResponse;

final class UninstallController
{
    public function __invoke(UninstallRequest $request, UninstallAction $uninstallAction): JsonResponse
    {
        return $uninstallAction->handle($request->validated());
    }
}
