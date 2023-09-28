<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
//            'customer_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'customer_nameSurname' => 'required|string|max:255',
            'customer_email' => 'required|email|unique:customers',
            'customer_phone' => 'required|string|max:15',
            'customer_balance' => 'required|integer|min:0',
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
