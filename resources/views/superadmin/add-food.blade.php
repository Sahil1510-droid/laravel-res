@extends('layout')
@section('title', 'Add Food')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Food
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="store_food" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="">Restaurant Name</label>
                                    <select name="restaurants_id" id="restaurants_id" class="form-control">
                                        @foreach ($res as $res)
                                            <option value="{{ $res->id }}">{{ $res->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="">Food</label>
                                    <input type="text" name="food" placeholder="Enter Foods Name"
                                        class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label for="">Price</label>
                                    <input type="number" name="price" placeholder="Enter Foods Price"
                                        class="form-control">
                                </div>
                                <div class="col-md-12 py-3">
                                    <button type="submit" class="btn btn-primary">Add
                                        Food</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
