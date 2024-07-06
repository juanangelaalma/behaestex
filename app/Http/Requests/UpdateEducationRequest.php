<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateEducationRequest extends FormRequest
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
            'attainment' => 'nullable|integer|min:0|max:12',
            'school' => 'nullable|string|max:100',
            'from' => ['nullable', 'regex:/^(0[1-9]|1[0-2])-\d{4}$/'],
            'to' => ['nullable', 'regex:/^(0[1-9]|1[0-2])-\d{4}$/'],
            'description' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'from.regex' => 'The from date must be in the format MM-YYYY.',
            'to.regex' => 'The to date must be in the format MM-YYYY.',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => '',
            'data'    => null,
            'errors' => $validator->errors()
        ], 400));
    }
}
