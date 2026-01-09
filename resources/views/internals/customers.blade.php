@extends('layout')

@section('title')
  Customer
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customers</h1>

        <form action="customers" method="POST" class="pb-5">

            <div class="mb-3">
                <div class="form-group mb-3">
                    <label for="name">Name : </label>
                    <input type="text" name="name" value="{{ old('name')}}" class="form-control">
                    <div>
                        {{$errors->first('name')}}
                    </div>
                </div>

                <div class="from-group mb-3">
                    <label for="email">Email : </label>
                    <input type="email" name="email" value="{{ old('email')}}"  class="form-control">
                    <div>
                        {{$errors->first('email')}}
                    </div>
                </div>

                <div class="form-group mb-88">
                     <label for='status'> Status : </label>
                     <select name='status'>
                          <option disabled> Select customer status</option>
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                     </select>
                <div>


            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Customer</button>

            @csrf
        </form>
    </div>
</div>


<div class="row">
    <div class="col-6">
        <h3> Active Customers </h3>
        <u1>
            @foreach ($activeCustomers as $customer)
            <li>{{$customer->name}} {{$customer->email}}</li>
            @endforeach
        </u1>
    </div>
     <div class="col-6">
        <h3> Inactive Customers </h3>
        <u1>
            @foreach ($inactiveCustomers as $customer)
            <li>{{$customer->name}} {{$customer->email}}</li>
            @endforeach
        </u1>
    </div>
</div>

@endsection