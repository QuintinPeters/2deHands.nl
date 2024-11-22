<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'street_name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'house_number' => 'required|integer',
            'postal_code' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Naam is vereist',
            'first_name.required' => 'Voornaam is vereist',
            'last_name.required' => 'Achternaam is vereist',
            'email.required' => 'Email is vereist',
            'street_name.required' => 'Straatnaam is vereist',
            'city.required' => 'Woonplaats is vereist',
            'house_number.required' => 'Huisnummer is vereist',
            'postal_code.required' => 'Postcode is vereist',
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        return redirect()->back()->withErrors($validator->errors())->withInput();

    }


}
