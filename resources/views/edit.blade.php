@extends('layout')


@section('content')

<div class="col-sm-6"> 
    <h1>Edit Restaurant :</h1>
    <form method="get" action="">
        @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" value="{{ $data->name }}" name="name" class="form-control" placeholder="Enter the name here...">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" value="{{ $data->email }}" name="email" class="form-control" placeholder="Enter the email here..." >
    </div>
    <div class="mb-3">
        <label>Address</label>
        <input type="text" value="{{ $data->adress }}" name="adress" class="form-control"  placeholder="Enter the adress here...">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop

