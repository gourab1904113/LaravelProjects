@extends('layout')

@section('title')
  Customer
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
        <a href="/customers/create">Add new Customer</a>
    </div>
</div>


   @foreach ($customers as $customer)
      <div class="row">
        <div class="col-2">{{$customer->id}}</div>
        <div class="col-2">{{$customer->name}}</div>
        <div class="col-4">{{$customer->email}}</div>
        <div class="col-2">{{$customer->company->name}}</div>
        <div class="col-2">{{$customer->status}}</div>
      </div>
   @endforeach

@endsection