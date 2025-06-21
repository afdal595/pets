<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetGuildRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'level' => 'required|integer|min:1',
            'master_id' => 'required|exists:users,id'
        ];
    }
}