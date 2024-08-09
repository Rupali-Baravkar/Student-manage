<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'dob' => 'required|date_format:Y-m-d',
            'gender' => 'required|in:male,female,other',
            'email' => [
            'required',
            'email',
            Rule::unique('students')->ignore($this->student->id),
        ],
            'phone' => 'required|string|max:15',
            'choose_subject' => 'required|string|max:100',
        ];
    }
}
