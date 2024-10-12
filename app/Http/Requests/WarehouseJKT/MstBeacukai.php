<?php

namespace App\Http\Requests\WarehouseJKT;

use Illuminate\Foundation\Http\FormRequest;

class MstBeacukai extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kd_KBPC' => ['required', 'string', 'min:1', 'max:6'],
            'Nama_KBPC' => ['required', 'string', 'min:1', 'max:35'],
            'active' => ['required', 'boolean'],
            'Kota' => ['required', 'string', 'min:1', 'max:25'],
            'Eselon' => ['required', 'string', 'min:1', 'max:6'],
            'NamaProgram' => ['required', 'string', 'min:1', 'max:3'],
            'Registrasi' => ['required', 'string', 'min:1', 'max:6'],
            'void' => ['required', 'integer', 'min:0', 'max:255'],
        ];
    }
}
