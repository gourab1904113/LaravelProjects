@extends('layout')


@section('content')
<h1>Customers</h1>

<form action="customers" method="POST" class="pb-5">

    <div class="mb-3">
        <div class="input-group mb-3">
            <label>Name : </label>
            <input type="text" name="name">
        </div>

        <div class="input-group mb-3">
            <label>Email : </label>
            <input type="email" name="email">
        </div>

        <div>
            {{$errors->first('name')}}
        </div>


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