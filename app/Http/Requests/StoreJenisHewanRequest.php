<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJenisHewanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255|unique:mst_jenis_hewan,nama',
            'deskripsi' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama jenis hewan wajib diisi',
            'nama.unique' => 'Jenis hewan ini sudah terdaftar',
        ];
    }
}