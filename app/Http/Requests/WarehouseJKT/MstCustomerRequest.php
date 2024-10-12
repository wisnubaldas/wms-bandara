<?php

namespace App\Http\Requests\WarehouseJKT;

use Illuminate\Foundation\Http\FormRequest;

class MstCustomerRequest extends FormRequest
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
            'CustomerCode' => ['required', 'string', 'min:1', 'max:20'],
            'CompanyName' => ['nullable', 'string', 'min:1', 'max:100'],
            'PICName' => ['nullable', 'string', 'min:1', 'max:50'],
            'Address1' => ['nullable', 'string', 'min:1', 'max:60'],
            'Address2' => ['nullable', 'string', 'min:1', 'max:60'],
            'City' => ['nullable', 'string', 'min:1', 'max:50'],
            'PostCode' => ['nullable', 'string', 'min:1', 'max:8'],
            'CountryCode' => ['nullable', 'string', 'min:1', 'max:2'],
            'MobileNumber' => ['nullable', 'string', 'min:1', 'max:20'],
            'FaxNumber' => ['nullable', 'string', 'min:1', 'max:20'],
            'Phonenumber' => ['nullable', 'string', 'min:1', 'max:20'],
            'EmailAddress' => ['nullable', 'string', 'min:1', 'max:75'],
            'NPWPNumber' => ['nullable', 'string', 'min:1', 'max:25'],
            'ContactIdentifier' => ['nullable', 'string', 'min:1', 'max:3'],
            'ContactNumber' => ['nullable', 'string', 'min:1', 'max:50'],
            'EmployeeNumber' => ['nullable', 'string', 'min:1', 'max:10'],
            'flag_faktur' => ['required', 'boolean'],
            'Dom_member' => ['required', 'boolean'],
            'int_member' => ['required', 'boolean'],
            'DateEntry' => ['nullable', 'string', 'min:1', 'max:10'],
            'TimeEntry' => ['nullable', 'string', 'min:1', 'max:8'],
            'void' => ['required', 'boolean'],
        ];
    }
}
