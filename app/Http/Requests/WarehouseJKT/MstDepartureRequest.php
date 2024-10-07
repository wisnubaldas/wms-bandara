<?php

namespace App\Http\Requests\WarehouseJKT;

use Illuminate\Foundation\Http\FormRequest;

class MstDepartureRequest extends FormRequest
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
            'TimeDeparture' => ['nullable', 'string', 'min:1', 'max:10'],
            'ActualTimeDeparture' => ['nullable', 'string', 'min:1', 'max:10'],
            'Departure' => ['nullable', 'string', 'min:1', 'max:50'],
            'AirlinesCode' => ['nullable', 'string', 'min:1', 'max:20'],
            'FlightNo' => ['nullable', 'string', 'min:1', 'max:10'],
            'ACType' => ['nullable', 'string', 'min:1', 'max:50'],
            'PayLoad' => ['nullable', 'numeric'],
            'CargoLoad' => ['nullable', 'numeric'],
            'Terminal' => ['nullable', 'string', 'min:1', 'max:50'],
            'Remarks' => ['nullable', 'string', 'min:1', 'max:50'],
            'DateOfDeparture' => ['nullable', 'string', 'min:1', 'max:10'],
            'DateOfEntry' => ['nullable', 'string', 'min:1', 'max:10']
        ];
    }
}
