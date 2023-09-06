<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseriUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ad' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'email' => 'required|email',

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
            'email' => ':Email Düzgün bir formatta girin',
        ];
    }


}
