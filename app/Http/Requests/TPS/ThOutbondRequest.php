<?php

namespace App\Http\Requests\TPS;

use Illuminate\Foundation\Http\FormRequest;

class ThOutbondRequest extends FormRequest
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
            'id_' => ['required', 'integer', 'min:1', 'max:20'],
            'tps' => ['nullable', 'string', 'min:1', 'max:4'],
            'gate_type' => ['required', 'enum', 'min:1', 'max:'],
            'waybill_smu' => ['nullable', 'string', 'min:1', 'max:15'],
            'hawb' => ['nullable', 'string', 'min:1', 'max:25'],
            'koli' => ['nullable', 'integer', 'min:1', 'max:11'],
            'netto' => ['nullable', 'decimal', 'min:1', 'max:102'],
            'volume' => ['nullable', 'decimal', 'min:1', 'max:102'],
            'kindofgood' => ['nullable', 'string', 'min:1', 'max:100'],
            'airline_code' => ['nullable', 'string', 'min:1', 'max:2'],
            'flight_no' => ['nullable', 'string', 'min:1', 'max:7'],
            'origin' => ['nullable', 'string', 'min:1', 'max:5'],
            'transit' => ['nullable', 'string', 'min:1', 'max:5'],
            'dest' => ['nullable', 'string', 'min:1', 'max:5'],
            'shipper_name' => ['nullable', 'string', 'min:1', 'max:120'],
            'consignee_name' => ['nullable', 'string', 'min:1', 'max:120'],
            '_is_active' => ['required', 'tinyint', 'min:1', 'max:1'],
            '_created_by' => ['nullable', 'string', 'min:1', 'max:120'],
            '_created_at' => ['required', 'timestamp', 'min:1'],
            '_updated_by' => ['nullable', 'string', 'min:1', 'max:120'],
            '_updated_at' => ['required', 'timestamp', 'min:1'],
            '_remarks_last_update' => ['nullable', 'string', 'min:1'],
            'key_upload' => ['nullable', 'integer', 'min:1', 'max:11'],
        ];
    }
}
