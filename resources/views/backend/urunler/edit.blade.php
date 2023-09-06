@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Settings</h3>
            </div>
            <div class="box-body">
                <form action="{{ route('urun.Update', ['id' => $urun->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Ürün Adı</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="urun_ismi"  type="text" value="{{$urun->urun_ismi}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ürün Açıklaması</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="urun_aciklama" type="text" value="{{$urun->urun_aciklama}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ürün Birim Fiyatı</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="urun_fiyat" type="text" value="{{$urun->urun_fiyat}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ürün Stok Miktarı</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text" name="stok_miktari" value="{{$urun->stok_miktari}}">
                            </div>
                        </div>
                    </div>


                    <div align="right" class="box-footer">
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
@section('css')@endsection
@section('js')@endsection
