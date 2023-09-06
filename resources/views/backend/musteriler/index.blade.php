@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Müşteriler</h3>

                <div align="right">
                    <a href="{{route('musteri.Ekle')}}"><button class="btn btn-success">Ekle</button></a>
                </div>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Müşteri Adı</th>
                        <th>Müşteri Soyadı</th>
                        <th>Müşteri Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                    @foreach($data['musteri'] as $musteriler)
                        <tr>
                            <td>{{$musteriler->ad}}</td>
                            <td>{{$musteriler->soyad}}</td>
                            <td>{{$musteriler->email}} TL</td>


                            <td width="5"><a href="{{route('musteri.Edit',['id' => $musteriler->id])}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
                                <a href="{{route('musteri.Destroy',['id' => $musteriler->id])}}"><i class="fa fa-trash-o"></i></a>
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
