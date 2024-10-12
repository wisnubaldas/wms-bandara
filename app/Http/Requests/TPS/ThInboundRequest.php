<?php

namespace App\Http\Requests\TPS;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam tps string required tps data.
 * @bodyParam gate_type string required gate_type data in:import,incoming,transit.
 * @bodyParam waybill_smu string required waybill_smu data.
 * @bodyParam hawb string required hawb data.
 * @bodyParam koli string required koli data.
 * @bodyParam netto string required netto data.
 * @bodyParam volume string required volume data.
 * @bodyParam kindofgood string required kindofgood data.
 * @bodyParam airline_code string required airline_code data.
 * @bodyParam flight_no string required flight_no data.
 * @bodyParam origin string required origin data.
 * @bodyParam transit string required transit data.
 * @bodyParam dest string required dest data.
 * @bodyParam shipper_name string required shipper_name data.
 * @bodyParam consignee_name string required consignee_name data.
 * @bodyParam _is_active boolean required _is_active data.
 * @bodyParam full_check boolean required full_check data.
 */
class ThInboundRequest extends FormRequest
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
            'tps' => ['nullable', 'string', 'min:1', 'max:4'],
            'gate_type' => ['required', 'string', 'in:import,incoming,transit'],
            'waybill_smu' => ['nullable', 'string', 'min:1', 'max:15'],
            'hawb' => ['nullable', 'string', 'min:1', 'max:25'],
            'koli' => ['nullable', 'integer'],
            'netto' => ['nullable', 'numeric'],
            'volume' => ['nullable', 'numeric'],
            'kindofgood' => ['nullable', 'string', 'min:1', 'max:100'],
            'airline_code' => ['nullable', 'string', 'min:1', 'max:2'],
            'flight_no' => ['nullable', 'string', 'min:1', 'max:7'],
            'origin' => ['nullable', 'string', 'min:1', 'max:5'],
            'transit' => ['nullable', 'string', 'min:1', 'max:5'],
            'dest' => ['nullable', 'string', 'min:1', 'max:5'],
            'shipper_name' => ['nullable', 'string', 'min:1', 'max:120'],
            'consignee_name' => ['nullable', 'string', 'min:1', 'max:120'],
            '_is_active' => ['required', 'boolean'],
            '_created_by' => ['nullable', 'string', 'min:1', 'max:120'],
            '_updated_by' => ['nullable', 'string', 'min:1', 'max:120'],
            '_remarks_last_update' => ['nullable', 'string', 'min:1'],
            'key_upload' => ['nullable', 'integer'],
            'full_check' => ['required', 'boolean'],
        ];
    }
}
