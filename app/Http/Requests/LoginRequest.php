<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.exists' => 'The email address does not exist in our records.',
            'password.required' => 'The password is required.',
            'password.min' => 'The password must be at least 8 characters long.',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        return redirect()->back()->withErrors($validator->errors())->withInput();

    }
}
