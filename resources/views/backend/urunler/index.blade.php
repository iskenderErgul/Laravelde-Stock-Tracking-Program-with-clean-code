@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ürünler</h3>

                <div align="right">
                    <a href="{{route('urun.Ekle')}}"><button class="btn btn-success">Ekle</button></a>
                </div>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Urun Adı</th>
                        <th>Urun Açıklaması</th>
                        <th>Urun Birim Fiyat</th>
                        <th>Stok Miktarı</th>
                    </tr>
                    <tbody>
                        @foreach($data['urun'] as $urunler)
                            <tr>
                                <td>{{$urunler->urun_ismi}}</td>
                                <td>{{$urunler->urun_aciklama}}</td>
                                <td>{{$urunler->urun_fiyat}} TL</td>
                                <td>{{$urunler->stok_miktari}}</td>

                                <td width="5"><a href="{{route('urun.Edit',['id' => $urunler->id])}}"><i class="fa fa-pencil-square"></i></a></td>
                                <td width="5">
                                    <a href="{{route('urun.Destroy',['id' => $urunler->id])}}"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </section>





@endsection
@section('css')@endsection
@section('js')@endsection
