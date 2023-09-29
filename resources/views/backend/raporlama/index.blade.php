@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Exports</h3>
            </div>
            <div class="box-body">

                <table class="table table-striped mt-5">
                    <form action="{{ route('export-customer') }}" method="POST" class="mx-5">
                        @csrf
                        <button type="submit" class="btn btn-success">Export Customers</button>
                    </form>
                </table>


            </div>
        </div>
    </section>





@endsection
@section('css')@endsection
@section('js')@endsection
