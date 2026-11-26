<?php

declare(strict_types=1);

namespace App\Http\Requests\Addon;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

final class OpenRequest extends FormRequest
{
    /** @return array<string, ValidationRule|array<mixed>|string> */
    public function rules(): array
    {
        return [
            'token' => ['required', 'string'],
            'current_admin_language' => ['required', 'string', 'size:2'],
            'version' => ['required', 'integer'],
            'time' => ['required', 'string'],
            'signature_v2' => ['required', 'string'],
        ];
    }
}
