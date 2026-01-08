@extends('layout')


@section('content')
    <h1>Customers</h1>
    <u1>
        @foreach ($customers as $customer)
        <li>{{$customer}}</li>
        @endforeach
    </u1>

@endsection