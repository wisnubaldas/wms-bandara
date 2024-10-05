<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MstAirlines extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'TwoLetterCode' => ['nullable', 'string', 'min:1', 'max:2'],
            'ThreeLetterCode' => ['nullable', 'string', 'min:1', 'max:3'],
            'AirlinesName' => ['nullable', 'string', 'min:1', 'max:25'],
            'CountryCode' => ['nullable', 'string', 'min:1', 'max:2'],
            'Actived' => ['required', 'integer', 'min:1', 'max:2'],
            'Void' => ['required', 'integer', 'min:1', 'max:2'],
            'KodeGudangByCustom' => ['required', 'string', 'min:1', 'max:5'],
            'WHcode' => ['nullable', 'string', 'min:1', 'max:5'],
            'activeGud' => ['nullable', 'string', 'in:1,2,3,4,5'],
            'flag_ekspor' => ['required', 'boolean'],
            'flag_import' => ['required', 'boolean'],
            'flag_outgoing' => ['required', 'boolean'],
            'flag_incoming' => ['required', 'boolean'],
            'flag_plp' => ['required', 'boolean']
        ];
    }
}
