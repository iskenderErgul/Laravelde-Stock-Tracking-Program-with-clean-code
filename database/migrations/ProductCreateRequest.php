<?php

namespace Database\migrations;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            '' => 'required|string|max:255',
            '' => 'required|string|max:255',
            '' => 'required|numeric',
            '' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute alanı zorunludur.',
            'string' => ':attribute alanı metin olmalıdır.',
            'numeric' => ':attribute alanı sayı olmalıdır.',
            'integer' => ':attribute alanı tam sayı olmalıdır.',
            'max' => ':attribute alanı :max karakteri geçemez.',
        ];
    }


}
