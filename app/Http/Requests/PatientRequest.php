<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'first_name' => ['required','string','max:25'],
            'last_name' => ['required','string','max:25'],
            'curp' => ['required','string','max:25'],
            'birthdate' => ['required','string','max:25'],
            'address' => ['required','string','max:25'],
            'phone_number' => ['required','string','max:15'],
            'email' => ['required','string','max:25'],
            'gender' => ['required','string','max:25'],
            'doctor_id' => ['required','string','max:2'],
        ];
    }
}
