<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreJurusanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_jurusan' => 'required',
            'keterangan' => 'required',
            'kode_jurusan' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_jurusan.required' => 'Nama jurusan wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
            'kode_jurusan.required' => 'Kode jurusan wajib diisi',
        ];
    }
}
