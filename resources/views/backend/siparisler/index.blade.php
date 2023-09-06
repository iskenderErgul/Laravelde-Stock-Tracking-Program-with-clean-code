@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Siparisler</h3>

                <div align="right">
                    <a href="{{route('siparis.Ekle')}}"><button class="btn btn-success">Ekle</button></a>
                </div>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Musteri İd</th>
                        <th>Ürün İd</th>
                        <th>Sipariş Durumu</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                    @foreach($data['siparis'] as $siparis)
                        <tr>
                            <td> {{$siparis->id}} -> {{ $siparis->musteri->ad }} {{ $siparis->musteri->soyad }}</td>
                            <td>{{ $siparis->urun_id  }} -> {{ $siparis->urun->urun_ismi }}</td>
                            <td>{{ $siparis->siparis_durumu }}</td>
                            <td width="5"><a href="{{ route('siparis.Edit', ['id' => $siparis->id]) }}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5"><a href="{{route('siparis.Destroy',['id' => $siparis->id])}}"><i class="fa fa-trash-o"></i></a></td>
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
