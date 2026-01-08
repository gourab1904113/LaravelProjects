@extends('layout')


@section('content')
    <h1>Customers</h1>

    <form action="customers" method="POST">

        <div class="input-group pb-5">
               <input type="text" name="name">
        </div>

        <button type="submit">Add Customer</button>

        @csrf
    </form>
    <u1>
        @foreach ($customers as $customer)
        <li>{{$customer->name}}</li>
        @endforeach
    </u1>

@endsection