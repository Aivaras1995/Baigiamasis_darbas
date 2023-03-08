<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'price' => ['required','integer', 'min:1'],
            'category_id' => ['required','integer', 'exists:categories,id'],
            'slug' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['nullable', 'string', 'min:3'],
            'image' => ['nullable'],
            'color' => ['nullable', 'in:Raudonas,Žalias,Mėlynas,Juodas,Baltas'],
            'size' => ['nullable', 'in:XS,S,M,L,XL,XXL'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages():array
    {
        return [
            'name.required' => 'Privalomas produkto pavadinimas',
            'name.string' => 'Pavadinima turi sudaryti lotyniški simboliai',
            'name.min' => 'Minimalus pavadinimo ilgis privalo būti :min simboliai',
            'name.max' => 'Maximalus pavadinimo ilgis privalo būti :max simboliai',
            'price.required' => 'Privaloma produkto kaina',
            'price.integer' => 'Privaloma minimali produkto kaina :min simboliai',

        ];
    }
}
