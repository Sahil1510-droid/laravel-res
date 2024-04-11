@extends('layout')
@section('title', 'User')

@section('content')

    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>Restaurants</h2>
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
