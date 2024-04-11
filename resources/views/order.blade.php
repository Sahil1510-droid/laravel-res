@extends('layout')
@section('title', 'Order Details')

<style>
    #coupon_msg {
        color: red;
    }
</style>
@section('content')

    <div class="py-5">
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h2>Order Details</h2>
                </div>
                <div class="card-body shadow">
                    <form action="/send_mail" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Food Order Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-md-5 mb-3">
                                            <label class="fw-bold">Restaurant Name:</label>
                                            <input type="text" name="name" id="name" value="{{ $data->name }}"
                                                class="form-control" readonly>
                                            <small class="text-danger name"></small>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="fw-bold">Restaurant Place:</label>
                                            <input type="text" name="place" id="place" value="{{ $data->place }}"
                                                class="form-control" readonly>
                                            <small class="text-danger place"></small>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="fw-bold">Restaurant Type:</label>
                                            <input type="text" name="type" id="type" value="{{ $data->type }}"
                                                class="form-control" readonly>
                                            <small class="text-danger type"></small>
                                        </div>
                                        <div class="col-md-10 mb-3">
                                            <label class="fw-bold">Food Available:</label>
                                            <input type="text" name="food" id="food" value="{{ $food->food }}"
                                                class="form-control" readonly>
                                            <small class="text-danger food"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">Name</label>
                                        <input type="text" name="cname" id="cname" placeholder="Enter Your Name"
                                            class="form-control" required>
                                        <small class="text-danger cname"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">Pin Code</label>
                                        <input type="number" name="code" id="code"
                                            placeholder="Enter Your Pin Code" class="form-control" required>
                                        <small class="text-danger pincode"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">Address</label>
                                        <textarea placeholder="Enter Your Address" name="address" id="address" class="form-control" rows="5" required></textarea>
                                        <small class="text-danger address"></small>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="fw-bold">Apply Coupon</label>
                                    <input type="text" class="form-control" name="coupon_code" id="coupon_code"
                                        placeholder="Enter Coupon Code">
                                        <button type="button" class="btn btn-primary mt-2" onclick="applyCoupon()">Apply Coupon</button>

                                    <div id="coupon_msg"></div>
                                </div>

                                <div class="col-md-3">
                                    <strong><label for="fw-bold">Total Price:</label></strong>
                                    <input type="number" name="price" id="price" value="{{ $food->price }}"
                                        class="form-control" disabled>
                                    <small class="text-danger price"></small>
                                    {{-- <h4>Total Price: ${{$food->price}}</h4> --}}
                                </div>

                                <br>
                                <center>
                                    <button type="submit" class="btn btn-primary">Confirm
                                        Order</button>
                                    <br>
                                    @if (Session::has('success'))
                                        <strong>
                                            <p class="text-success">{{ session('success') }}
                                            </p>
                                        </strong>
                                    @endif
                                </center>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
<script>
    function applyCoupon() {
        jQuery('#coupon_msg').html('');
        var coupon_code = jQuery('#coupon_code').val();
        if (coupon_code != '') {
            jQuery.ajax({
                type: "post",
                url: "/apply_coupon_code",
                data: 'coupon_code=' + coupon_code + '&_token=' + jQuery("[name='_token']").val(),
                success: function(result) {
                    // console.log(result);
                    document.getElementById("totalPrice").value = result;
                }
            });
        } else {
            jQuery('#coupon_msg').html('Please Enter Cupon Code');
        }
    }
</script>
