@extends('layout')
@section('title', 'Login')

@section('content')
    <div class="container text-center">
        <div class="mt-5">

            <h1>Login</h1>
            <br>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach
            @endif

            @if (Session::has('error'))
                <p style="color:red;">{{ Session::get('error') }}</p>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <input type="email" name="email" placeholder="Enter Email">
                <br><br>
                <input type="password" name="password" placeholder="Enter Password">
                <br><br>
                <button class="btn btn-primary" type="submit" value="Login">Log In</button>
            </form>
        </div>
    </div>


@endsection
