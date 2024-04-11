@extends('layout')
@section('title', 'Super Admin')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Admin
                            <a href="super"><button class="btn btn-danger float-end">Back</button></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="store_data2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Admin Name</label>
                                    <input type="text" name="name" placeholder="Enter Admin Name"
                                        class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Admin Email</label>
                                    <input type="email" name="email" placeholder="Enter Admin Email"
                                        class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Admin Password</label>
                                    <input type="password" name="password" placeholder="Enter Admin Email"
                                        class="form-control">
                                </div>
                                <div class="col-md-4 py-3">
                                    <label for="">Role</label>
                                    <select name="role" id="role" class="col-md-4">
                                        <option value="admin" selected>Admin</option>
                                    </select>
                                </div>
                                <div class="col-md-12 py-3">
                                    <button type="submit" class="btn btn-primary">Add Admin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
