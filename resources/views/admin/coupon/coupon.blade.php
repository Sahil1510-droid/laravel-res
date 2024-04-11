@extends('layout')
@section('title', 'Add Coupon')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Coupon
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="store_coupon" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Code:</label>
                                    <input type="text" name="code" id="code" placeholder="Enter Coupon Code"
                                        class="form-control">
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Name:</label>
                                    <input type="text" name="name" placeholder="Enter Coupon Name"
                                        class="form-control">
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Type:</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="Percent">Percentage</option>
                                        <option value="Fixed">Fixed</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Discount Amount:</label>
                                    <input type="number" name="discount_amount" id="discount_amount"
                                        placeholder="Enter Discount Amount" class="form-control">
                                </div>
                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Minimum Amount:</label>
                                    <input type="number" name="min_amount" id="min_amount"
                                        placeholder="Enter Minimum Amount" class="form-control">
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Status:</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                </div>
                                <div class="col-md-12 py-3">
                                    <button type="submit" class="btn btn-primary">Add
                                        Coupon</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
