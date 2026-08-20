<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreDataSchoolRequest extends FormRequest
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
            'Nama_sekolah' => 'required|string',
            'Kepala_sekolah' => 'required|string',
            'Alamat' => 'required|string',
            'Status_sekolah' => 'required|string',
            'Jenjang_pendidikan' => 'required|string',
            'Akreditasi' => 'required|string',
            'Telp' => 'nullable|string',
            'Email' => 'required|email',
            'NPSN' => 'required|string',
            'Tahun_berdiri' => 'required|string',
            'Logo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

            // required itu wajib nullable itu boleh kosong dan unique itu tidak boleh sama
        ];
    }
    public function messages(): array{
        return [
          'nama_sekolah.required' => 'Nama sekolah wajib diisi',
            'npsn.unique' => 'NPSN sudah terdaftar',
            'logo_sekolah.image' => 'File harus berupa gambar',
            'logo_sekolah.max' => 'Ukuran gambar maksimal 2MB',
        ];
    }
}
