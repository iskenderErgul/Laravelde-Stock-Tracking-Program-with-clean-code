@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Sipariş Oluştur</h3>
            </div>
            <div class="box-body">
                <form action="{{ route('siparis.Update', ['id' => $siparis->id]) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- HTTP PUT kullanılacak -->


                    <div class="form-group">
                        <label>Müşteri Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="musteri_id">
                                    <option value="">Seçiniz</option>
                                    @foreach ($musteriler as $musteri)
                                        <option value="{{ $musteri->id }}" {{ $siparis->musteri_id == $musteri->id ? 'selected' : '' }}>
                                            {{ $musteri->ad }} {{ $musteri->soyad }}
                                        </option>
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
                                        <option value="{{ $urun->id }}" {{ $siparis->urun_id == $urun->id ? 'selected' : '' }}>
                                            {{ $urun->urun_ismi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Sipariş Durumu</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="siparis_durumu">
                                    <option value="Beklemede" {{ $siparis->siparis_durumu == 'Beklemede' ? 'selected' : '' }}>Beklemede</option>
                                    <option value="Gönderildi" {{ $siparis->siparis_durumu == 'Gönderildi' ? 'selected' : '' }}>Gönderildi</option>
                                    <option value="Teslim Edildi" {{ $siparis->siparis_durumu == 'Teslim Edildi' ? 'selected' : '' }}>Teslim Edildi</option>
                                    <!-- Diğer sipariş durumları için benzer şekilde seçenekler ekleyebilirsiniz -->
                                </select>
                            </div>
                        </div>
                    </div>




                    <div align="right" class="box-footer">
                        <button type="submit" class="btn btn-success">Siparişi Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
