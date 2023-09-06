@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Sipariş Oluştur</h3>
            </div>
            <div class="box-body">
                <form action="{{ route('siparis.Store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Müşteri Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="musteri_id">
                                    <option value="">Seçiniz</option>
                                    @foreach ($musteriler as $musteri)
                                        <option value="{{ $musteri->id }}">{{ $musteri->ad }} {{ $musteri->soyad }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ürün Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="urun_id">
                                    <option value="">Seçiniz</option>
                                    @foreach ($urunler as $urun)
                                        <option value="{{ $urun->id }}">{{ $urun->urun_ismi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>



                    <div align="right" class="box-footer">
                        <button type="submit" class="btn btn-success">Sipariş Oluştur</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
