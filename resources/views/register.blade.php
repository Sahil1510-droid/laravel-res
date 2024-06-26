@extends('layout')
@section('title', 'Register')

@section('content')
    <div class="container text-center">
        <div class="mt-5">
            <h1>Register</h1>
            <br>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Enter Name">
                <br><br>
                <input type="email" name="email" placeholder="Enter Email">
                <br><br>
                <input type="password" name="password" placeholder="Enter Password">
                <br><br>
                <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
                <br><br>
                <button type="submit" value="Register" class="btn btn-primary">Register</button>

            </form>

            @if (Session::has('success'))
                <p style="color:green;">{{ Session::get('success') }}</p>
            @endif
        </div>
    </div>

@endsection
