<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'profile_pic' => 'sometimes|nullable|image|mimes:jpeg,png,jpg',
            'age' => 'sometimes|nullable|numeric',
            'email' => 'required|email',
            'password' => 'required|string|min:5|max:25',
        ];
    }
}
