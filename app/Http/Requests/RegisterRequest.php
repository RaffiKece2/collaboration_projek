<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

            'nama' => 'required|string|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'

            //
        ];
    }


    public function messages() {

        return [

            'nama.required' => 'nama harus diisi',
            'nama.string' => 'nama harus huruf',
            'nama.min' => 'nama harus kurang dari 10',
            'email.required' => 'email harus diisi',
            'email.email' => 'email anda salah',
            'email.unique' => 'email anda sudah ada',
            'password.required' => 'password harus diisi'

        ];

    }
}
