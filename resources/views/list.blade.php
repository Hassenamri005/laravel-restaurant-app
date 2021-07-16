@extends('layout')


@section('content')
<h1>Restaurant List page is here...</h1>
@if(Session::get('status'))
<div class="alert alert-success" role="alert">
  {{Session::get('status')}}
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->adress}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
        <td>
            <a href="/delete/{{$item->id}}">Delete</a>
            <a href="/edit/{{$item->id}}">Edit</a>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>



@stop

