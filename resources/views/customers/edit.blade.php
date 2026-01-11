
@extends('layout')

@section('title')
  Add new customer
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Add New Customer:</h1>

        <form action="/customers/{{ $customer->id }}" method="POST" class="pb-5">
            @method('PATCH')
            @include('customers.form')

            <button type="submit" class="btn btn-primary mt-3">Update Customer</button>
        </form>
    </div>
</div>



@endsection