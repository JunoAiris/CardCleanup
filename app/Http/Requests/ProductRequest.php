<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:2|max:256',
            'price' => 'required|numeric|min:0.01',
            'description' => 'nullable|min:2|max:65535',
            'is_available' => '',
            'image_path' => 'nullable|file',
        ];
    }
}
