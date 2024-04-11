@extends('layout')
@section('title', 'Add Restaurant')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Restaurant
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="store_data" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Restaurant Name</label>
                                    <input type="text" name="name" placeholder="Enter Restaurant Name"
                                        class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Restaurant Type</label>
                                    <select name="type" class="form-select" aria-label="Default select example">
                                        <option selected>Select Restaurant Type</option>
                                        <option value="1 Star">1 Star</option>
                                        <option value="2 Star">2 Star</option>
                                        <option value="3 Star">3 Star</option>
                                        <option value="4 Star">4 Star</option>
                                        <option value="5 Star">5 Star</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Restaurant Place</label>
                                    <input type="text" name="place" placeholder="Enter Restaurant Place"
                                        class="form-control">
                                </div>
                                <div class="col-md-12 py-3">
                                    <button type="submit" class="btn btn-primary">Add
                                        Restaurant</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
