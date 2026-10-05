<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerateDescriptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_name' => ['required', 'string', 'max:255'],
            'features' => ['required', 'string', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'product_name.required' => 'Ürün adı zorunludur.',
            'features.required' => 'Ürün özellikleri zorunludur.',
        ];
    }
}