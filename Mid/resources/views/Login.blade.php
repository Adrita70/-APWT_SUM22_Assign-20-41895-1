@extends('layouts.main1')

@section('content')

<h2>Login your account</h2>

<form action="" method="post">

    {{@csrf_field()}}

    Email : <input type="text" value="{{old('email')}}" name="email"> </br>

    @error('email')

        <span class="text-danger">{{$message}}</span><br>

    @enderror

    Password: <input type="password" name="password"></br>

    @error('password')

        <span class="text-danger">{{$message}}</span><br>

    @enderror

    <input type="submit" value="Login">

</form>

@endsection