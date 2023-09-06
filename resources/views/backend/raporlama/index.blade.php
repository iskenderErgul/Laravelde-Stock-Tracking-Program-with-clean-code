@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Siparisler</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <form action="{{ route('urun-rapor-olustur') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Ürün Rapor Oluştur</button>
                    </form>
                </table>


                <table class="table table-striped mt-5">
                    <form action="{{ route('musteri-rapor-olustur') }}" method="POST" class="mx-5">
                        @csrf
                        <button type="submit" class="btn btn-success">Muşteri Rapor Oluştur</button>
                    </form>
                </table>

                <table class="table table-striped mt-5">
                    <form action="{{ route('siparis-rapor-olustur') }}" method="POST" class="mx-5">
                        @csrf
                        <button type="submit" class="btn btn-success">Sipariş Rapor Oluştur</button>
                    </form>
                </table>
            </div>
        </div>
    </section>





@endsection
@section('css')@endsection
@section('js')@endsection
