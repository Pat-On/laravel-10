<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// php artisan make:request LoginRequest

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|alpha|min:6|max:10',
            'email' => ["required", 'email', ],
            'password' => 'required'
        ];
    }

    public function messages()
   {
        return [
            // rule customization error info
            'name.required' => 'bla bla bla name',
            'name.alpha' => "only letters"
        ];
   }
}
