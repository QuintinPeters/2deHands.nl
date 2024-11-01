<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RegisterRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => [
                'required',
                'email',
                'max:100',
                Rule::unique('users')->where(function ($query) {
                    return $query->whereNull('provider_id');
                })
            ],
            'password' => [
                'required',
                'confirmed',
                'min:7',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Vul een naam in',
            'name.max' => 'Naam mag niet langer zijn dan 100 karakters.',
            'email.unique' => 'Dit emailadres is al in gebruik.',
            'email.required' => 'Vul een emailadres in.',
            'email.email' => 'Vul een geldig emailadres in.',
            'email.max' => 'Emailadres mag niet langer zijn dan 100 karakters.',
            'password.required' => 'Vul een wachtwoord in.',
            'password.min' => 'Wachtwoord moet minimaal 7 karakters lang zijn.',
            'password.regex' => 'Wachtwoord moet minimaal één hoofdletter en één cijfer bevatten.',
            'password.confirmed' => 'Wachtwoorden komen niet overeen.',
        ];

    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        return redirect()->back()->withErrors($validator->errors())->withInput();

    }
}
