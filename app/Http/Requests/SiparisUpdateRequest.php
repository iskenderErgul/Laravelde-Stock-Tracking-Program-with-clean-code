<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiparisUpdateRequest extends FormRequest
{


    public function rules(): array
    {

        return [
            'musteri_id' => 'required',
            'urun_id' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'urun_id.required' => 'Ürün seçiniz',
            'urun_id.integer' => 'Ürün ID bir tam sayı olmalıdır',
        ];
    }




}
