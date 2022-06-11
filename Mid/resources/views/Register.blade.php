@extends('layouts.main1')
@section('content')
<form action="" method="post">
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Email : <input type="text" value="{{old('email')}}" name="email"> </br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Password: <input type="password" name="password"></br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Type: <input type="text box" name="type"></br>
    @error('type')
       <span class="text-danger">{{$message}}</span><br>
       @enderror
    <input type="submit" value="Create">
</form>
@endsection
