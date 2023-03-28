<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.string' => 'Please enter a valid name.',
            'email.required' => 'Please enter your email address.',
            'email.string' => 'Please enter a valid email address.',
            'email.email' =>  'Please enter a properly formatted email address.',
            'email.unique' => 'This email address has already been registered.',
        ];
    }
}
