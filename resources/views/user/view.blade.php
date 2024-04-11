@extends('layout')
@section('title', 'Restaurant Details')


@section('content')


    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>
                        Restaurant
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Restaurant Name</th>
                                <th>Type</th>
                                <th>Place</th>
                                <th>Foods Available</th>
                                <th>Price</th>
                                <th>Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                                <tr class="text-center">
                                    <th>
                                        {{ $loop->iteration }}
                                    </th>
                                    <td>
                                        {{ $food->res->name }}
                                    </td>
                                    <td>
                                        {{ $food->res->type }}
                                    </td>
                                    <td>
                                        {{ $food->res->place }}
                                    </td>
                                    <td>
                                        {{ $food->food }}
                                    </td>
                                    <td>
                                       ${{$food->price}}
                                    </td>
                                    <td>
                                        <a href="/order/{{ $food->id }}"><button class="btn btn-primary px-3"
                                                style="border-radius: 12px">Order</button></a>
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
