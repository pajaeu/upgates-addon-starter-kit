<?php

declare(strict_types=1);

namespace App\Http\Controllers\Addon;

use App\Actions\Addon\OpenAction;
use App\Http\Requests\Addon\OpenRequest;
use Illuminate\Http\JsonResponse;

final class OpenController
{
    public function __invoke(OpenRequest $request, OpenAction $openAction): JsonResponse
    {
        return $openAction->handle($request->validated());
    }
}
