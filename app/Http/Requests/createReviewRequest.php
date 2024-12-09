<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createReviewRequest extends FormRequest
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
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'rating.required' => 'Vul een rating in',
            'comment.required' => 'Schrijf een review',
            'comment.max' => 'De review mag maximaal 255 tekens bevatten',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        return redirect()->back()->withErrors($validator->errors())->withInput();

    }
}
