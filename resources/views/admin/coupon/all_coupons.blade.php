@extends('layout')
@section('title', 'Add Coupon')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Coupons
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data as $data)
                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Code:</label>
                                    <input type="text" name="code" id="code" placeholder="Enter Coupon Code"
                                        class="form-control" value="{{ $data->code }}" disabled>
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Name:</label>
                                    <input type="text" name="name" placeholder="Enter Coupon Name"
                                        class="form-control" value="{{ $data->name }}" disabled>
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Type:</label>
                                    <input type="text" class="form-control" value="{{ $data->type }}" disabled>
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Discount Amount:</label>
                                    <input type="number" name="discount_amount" id="discount_amount"
                                        placeholder="Enter Discount Amount" class="form-control"
                                        value="{{ $data->discount_amount }}" disabled>
                                </div>
                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Minimum Amount:</label>
                                    <input type="number" name="min_amount" id="min_amount"
                                        placeholder="Enter Minimum Amount" class="form-control"
                                        value="{{ $data->min_amount }}" disabled>
                                </div>

                                <div class="col-md-3 mt-3 fw-bold">
                                    <label for="">Coupon Status:</label>
                                    <select name="status" id="status" class="form-control" value="{{ $data->status }}" disabled>
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
