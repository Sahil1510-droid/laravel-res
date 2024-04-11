@extends('layout')
@section('title', 'Order Details')


@section('content')

    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>
                       All Orders
                        <a href="super"><button class="btn btn-danger float-end">Back</button></a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Restaurant Name</th>
                                <th>Restaurant Place</th>
                                <th>Customer Food</th>
                                <th>Pin Code</th>
                                <th>Customer Address</th>
                                <th>Order Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr class="text-center">
                                    <th>{{ $datas->id }}</th>
                                    <td>{{ $datas->name }}</td>
                                    <td>{{ $datas->place }}</td>
                                    <td>{{ $datas->food }}</td>
                                    <td>{{ $datas->code }}</td>
                                    <td>{{ $datas->address }}</td>
                                    <td>{{ $datas->created_at }}</td>
                                    <td>
                                        <a href="delete/{{ $datas->id }}"><button class="btn btn-danger px-3"
                                                style="border-radius: 12px">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
