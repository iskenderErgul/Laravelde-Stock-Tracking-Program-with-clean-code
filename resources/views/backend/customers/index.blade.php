@extends('backend.layout')
@section('content')
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Customers</h3>

                <div align="right">
                    <a href="{{route('customer.create')}}"><button class="btn btn-success">Add Customer</button></a>
                </div>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Customer Balance</th>

                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                    @foreach($data['customer'] as $customers)
                        <tr>
                            <td>{{$customers->customer_nameSurname}}</td>
                            <td>{{$customers->customer_email}}</td>
                            <td>{{$customers->customer_phone}}</td>
                            <td>{{$customers->customer_balance}}</td>



                            <td width="5"><a href="{{route('customer.edit',['id' => $customers->id])}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
                                <a href="{{route('customer.destroy',['id' => $customers->id])}}"><i class="fa fa-trash-o"></i></a>
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
