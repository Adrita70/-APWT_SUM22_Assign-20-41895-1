@extends('layouts.main1')

@section('content')

<h2>This is a dashboard</h2>

<table border="1">

        <tr>

            <th>Name</th>

            <th>Email</th>

        </tr>

        @foreach($mids as $s)

            <tr>

                <td>{{$s->name}}</td>

                <td>{{$s->email}}</td>

            </tr>

        @endforeach

    </table>

    @endsection