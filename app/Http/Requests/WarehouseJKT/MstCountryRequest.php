<?php

namespace App\Http\Requests\WarehouseJKT;

use Illuminate\Foundation\Http\FormRequest;

class MstCountryRequest extends FormRequest
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
            'CountryCode' => ['nullable', 'string', 'min:1', 'max:2'],
            'CountryName' => ['nullable', 'string', 'min:1', 'max:35'],
            'void' => ['required', 'integer'],
        ];
    }
}
