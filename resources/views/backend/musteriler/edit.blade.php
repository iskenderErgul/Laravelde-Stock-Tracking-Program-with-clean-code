@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Urun Ekle</h3>
            </div>
            <div class="box-body">
                <form action="{{route('musteri.Update',['id' => $musteri->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Müşteri Adı</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="ad" type="text" value="{{$musteri->ad}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Müşteri Soyad</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="soyad" type="text" value="{{$musteri->soyad}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Müşteri Email</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="email" type="email" value="{{$musteri->email}}">
                            </div>
                        </div>
                    </div>



                    <div align="right" class="box-footer">
                        <button type="submit" class="btn btn-success">Bilgileri Güncelle</button>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
@section('css')@endsection
@section('js')@endsection
