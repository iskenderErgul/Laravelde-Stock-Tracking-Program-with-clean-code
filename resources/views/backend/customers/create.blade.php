@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Customer</h3>
            </div>
            <div class="box-body">
                <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Customer NameSurname</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="customer_nameSurname" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Customer Email</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="customer_email" type="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Customer Phone</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="customer_phone" type="number" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Customer Balance</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  name="customer_balance" type="number" value="">
                            </div>
                        </div>
                    </div>






                    <div align="right" class="box-footer">
                        <button type="submit" class="btn btn-success">Ekle</button>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
@section('css')@endsection
@section('js')@endsection
