<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AddressRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'zip' => ['required', '//regex'],
            'street' => ['required', 'string'],
            'house_number' => ['required', 'integer'],
            'apartment_number' => ['nullable', 'integer'],
            'state' => ['nullable', 'string'],
            'type' => ['required', 'string', ],
            'additional_info' => ['nullable', 'string', 'min:3'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Privalomas pavadinimas',
            'name.string'   => 'Pavadinima turi sudaryti lotyniški simboliai',
            'name.min'      => 'Minimalus pavadinimo ilgis privalo būti :min simboliai',
            'name.max'      => 'Maximalus pavadinimo ilgis privalo būti :max simboliai',
            'country.required' => 'Privalomas šalies pavadinimas',
            'country.string'   => 'Pavadinima turi sudaryti lotyniški simboliai',
            'city.required' => 'Privalomas miesto pavadinimas',
            'city.string'   => 'Pavadinima turi sudaryti lotyniški simboliai',
            'zip.required' => 'Privalomas zip kodas',
            'zip.integer'   => 'Zip kodą turi sudaryti skaitmenys',
            'street.required' => 'Privalomas gatvės pavadinimas',
            'street.string'   => 'Pavadinima turi sudaryti lotyniški simboliai',
            'house_number.required' => 'Privalomas namo pavadinimas',
            'house_number.string'   => 'Pavadinima turi sudaryti skaitmenys',
            'type.required' => 'Privaloma nurodyti tipą',
            'type.string' => 'Tipa turi sudaryti lotyniški simboliai',
            'user_id.required' => 'Privalomas laukelis'

        ];
    }
}
