<?php

namespace App\Repostory;

use App\Http\Requests\MuseriCreateRequest;
use App\Http\Requests\MuseriUpdateRequest;
use App\Http\Requests\UrunCreateRequest;
use App\Http\Requests\UrunUpdateRequest;
use App\Models\Musteri;

class MusteriRepository
{
    public function createMusteri(MuseriCreateRequest $request)
    {
        return Musteri::create([
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'email' => $request->email
        ]);
    }
    public function updateMusteri(MuseriUpdateRequest $request,$id)
    {
        return Musteri::where('id',$id)
            ->update(
                [
                    'ad' => $request->ad,
                    'soyad' => $request->soyad,
                    'email' => $request->email,

                ]
            );

    }

    public  function destroyMusteri($id)
    {
        $urun=Musteri::find(intval($id));
        return $urun->delete();
    }
}
