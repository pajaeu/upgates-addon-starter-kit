<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

final class InstallRequest extends FormRequest
{
    /** @return array<string, ValidationRule|array<mixed>|string> */
    public function rules(): array
    {
        return [
            'token' => ['required', 'string'],
            'version' => ['required', 'integer'],
            'apiUser' => ['required', 'string'],
            'apiKey' => ['required', 'string'],
            'apiUrl' => ['required', 'string', 'url'],
            'current_admin_language' => ['required', 'string', 'size:2'],
            'time' => ['required', 'string'],
            'signature_v2' => ['required', 'string'],
        ];
    }
}
