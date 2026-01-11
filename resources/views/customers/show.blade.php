@extends('layout')

@section('title')
  Show Customer
@endsection

@section('content')

  <div class="row">
    <div class="col-12">
         <h1>Details of {{$customer->name}}</h1>
         <p>
            <a href="/customers/{{ $customer->id }}/edit">Edit</a>
         </p>
    </div>
  </div>

  <div class="row">
    <div class="col-12">

       <h3>Name: {{$customer->name}}</h3>
       <h3>Email: {{$customer->email}}</h3>
       <h3>Company: {{$customer->company->name}}</h3>
    </div>
  </div>


@endsection