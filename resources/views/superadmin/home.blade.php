@extends('layout')
@section('title', 'Super Admin')

@section('content')

    <div class="container">
        <a href="add_admin"><button class="btn btn-danger mt-5">Add Admin</button></a>
        <a href="all_admin"><button class="btn btn-primary mt-5">All Admins</button></a>
        <a href="all_user"><button class="btn btn-info mt-5">All Users</button></a>
        <a href="all_orders"><button class="btn btn-secondary mt-5">All Orders</button></a>
        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>Restaurants
                        <a href="add"><button class="btn btn-primary float-end">Add Restaurant</button></a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Restaurant Name</th>
                                <th>Restaurant Type</th>
                                <th>Restaurant Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                                <tr class="text-center">
                                    <th>{{ $record->id }}</th>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->type }}</td>
                                    <td>{{ $record->place }}</td>
                                    <td>
                                        <a href="view/{{ $record->id }}"><button class="btn btn-primary px-3"
                                                style="border-radius: 12px">View</button></a>
                                        <a href="edit/{{ $record->id }}"><button class="btn btn-info px-3"
                                                style="border-radius: 12px">Edit</button></a>
                                        <a href="delete/{{ $record->id }}"><button class="btn btn-danger px-3"
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
