<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrunCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'urun_ismi' => 'required|string|max:255',
            'urun_aciklama' => 'required|string|max:255',
            'urun_fiyat' => 'required|numeric',
            'stok_miktari' => 'required|integer',
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

    public function attributes(): array
    {
        return [
            'urun_ismi' => 'Ürün Adı',
            'urun_aciklama' => 'Ürün Açıklaması',
            'urun_fiyat' => 'Ürün Birim Fiyatı',
            'stok_miktari' => 'Ürün Stok Miktarı',
        ];
    }
}
