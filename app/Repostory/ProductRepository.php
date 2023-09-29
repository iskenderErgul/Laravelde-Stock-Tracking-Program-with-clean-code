<?php

namespace App\Repostory;

use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\Models\Urun;
use Database\migrations\ProductCreateRequest;

class ProductRepository
{

    public function createProduct(ProductCreateRequest $request)
    {
        return Product::create([
            'urun_ismi' => $request->urun_ismi,
            'urun_fiyat' => $request->urun_fiyat,
            'urun_aciklama' => $request->urun_aciklama,
            'stok_miktari' => $request->stok_miktari
        ]);
    }
    public function updateProduct(ProductUpdateRequest $request,$id)
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

    public  function destroyProduct($id)
    {
        $product=Product::find(intval($id));
        return $product->delete();
    }


}
