<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookStore extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'phone_number' => ['required'],
            'number_of_people' => ['required', 'integer'],
            'arrival_time' => ['required', 'date'],
            'last_note' => ['nullable'],
        ];
    }
    // public function messages()
    // {
    //     return [];
    // }
}
