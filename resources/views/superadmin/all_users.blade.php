@extends('layout')
@section('title', 'User Details')


@section('content')


    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Users
                        <a href="super"><button class="btn btn-danger float-end">Back</button></a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Admin Name</th>
                                <th>Admin Email</th>
                                <th>Admin Password</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr class="text-center">
                                <th>{{ $data->id }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->password }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <a href="delete/{{ $data->id }}"><button class="btn btn-danger px-3"
                                            style="border-radius: 12px">Delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
