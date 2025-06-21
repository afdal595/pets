<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePetGuildRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Ubah menjadi `false` jika membutuhkan autentikasi
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'sometimes', // Opsional: hanya divalidasi jika field ada di request
                'string',
                'max:100',
                Rule::unique('pet_guilds')->ignore($this->pet_guild) // Hindari duplikasi nama
            ],
            'description' => 'nullable|string',
            'level' => 'sometimes|integer|min:1|max:100',
            'master_id' => 'sometimes|exists:users,id'
        ];
    }

    /**
     * Custom error messages (opsional)
     */
    public function messages(): array
    {
        return [
            'name.unique' => 'Nama guild sudah digunakan',
            'level.max' => 'Level tidak boleh lebih dari 100'
        ];
    }
}