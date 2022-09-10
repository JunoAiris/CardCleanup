<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'nullable',
            'email' => 'nullable|email',
            'password' => 'nullable',
            'cpf' => 'nullable|numeric',
            'phone' => 'nullable|numeric|min:9',
            'type' => 'nullable'
        ];
    }
}
