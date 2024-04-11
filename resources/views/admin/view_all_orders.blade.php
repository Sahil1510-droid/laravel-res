@extends('layout')
@section('title', 'Order Details')


@section('content')


    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>
                        All Orders
                        <a href="admin"><button class="btn btn-danger float-end">Back</button></a>
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
                                <th>Timer</th>
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
                                    <td></td>
                                    <td>
                                        <a href="delete/{{ $datas->id }}"><button class="btn btn-danger px-3"
                                                style="border-radius: 12px">Delete</button></a>
                                        {{-- <a href="start/{{ $datas->id }}"><button class="btn btn-info px-3"
                                                style="border-radius: 12px">Start</button></a> --}}
                                        <button type="button" class="btn btn-info px-3" data-toggle="modal"
                                            data-target="#exampleModal" style="border-radius: 12px">
                                            Start
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- model start here  --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Timer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="store_time" method="POST">
                    @csrf
                    <div class="modal-body">
                        @foreach ($data as $datas)
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="number" value="{{ $datas->id }}" name="order_id" id="order_id"
                                    class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Timer</label>
                                <input type="datetime-local" name="timer" id="timer" class="form-control"
                                    placeholder="Enter first name" required>
                            </div>
                        @endforeach
                        <button type="submit" value="Submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- model end here  --}}




    {{-- pop model end here  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
