<?php

namespace App\Repostory;

use App\Http\Requests\UrunCreateRequest;
use App\Http\Requests\UrunUpdateRequest;
use App\Models\Urun;

class UrunRepository
{

    public function CreateUrun(UrunCreateRequest $request)
    {
        return Urun::create([
            'urun_ismi' => $request->urun_ismi,
            'urun_fiyat' => $request->urun_fiyat,
            'urun_aciklama' => $request->urun_aciklama,
            'stok_miktari' => $request->stok_miktari
        ]);
    }
    public function UpdateUrun(UrunUpdateRequest $request,$id)
    {
        return Urun::where('id',$id)
            ->update(
            [
                'urun_ismi' => $request->urun_ismi,
                'urun_fiyat' => $request->urun_fiyat,
                'urun_aciklama' => $request->urun_aciklama,
                'stok_miktari' => $request->stok_miktari
            ]
        );

    }

    public  function DestroyUrun($id)
    {
        $urun=Urun::find(intval($id));
        return $urun->delete();
    }


}
