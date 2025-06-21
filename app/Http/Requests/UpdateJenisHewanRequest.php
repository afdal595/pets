<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJenisHewanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Pastikan true agar request ini bisa dipakai
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
