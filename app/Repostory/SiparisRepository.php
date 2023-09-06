<?php

namespace App\Repostory;


use App\Http\Requests\SiparisCreateRequest;
use App\Http\Requests\SiparisUpdateRequest;
use App\Models\Siparis;

class SiparisRepository
{

    public function createSiparis(SiparisCreateRequest $request)
    {

        return Siparis::create([
            'musteri_id' => $request->musteri_id,
            'urun_id' => $request->urun_id,

        ]);
    }
    public function  updateSiparis(SiparisUpdateRequest $request , $id)
    {
        return Siparis::where('id',$id)
            ->update(
                [
                    'musteri_id' => $request->musteri_id,
                    'urun_id' => $request->urun_id,
                    'siparis_durumu' => $request->siparis_durumu


                ]
            );
    }

    public function destroySiparis($id)
    {
        $siparis=Siparis::find(intval($id));
        return $siparis->delete();
    }
}
