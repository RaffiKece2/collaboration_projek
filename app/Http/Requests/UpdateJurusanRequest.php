<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class UpdateJurusanRequest extends FormRequest
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
            'nama_jurusan' => 'nullable',
            'keterangan' => 'nullable',
            'kode_jurusan' => 'nullable',
        ];
    }

    public function messages()
    {
       return [
        'nama_jurusan' => 'Jurusan berhasil di update',
        'keterangan' => 'Keterangan berhasil di update',
        'kode_jurusan' => 'Kode jurusan berhasil di update',
        ];
    }
}
