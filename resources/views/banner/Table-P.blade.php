@extends('layouts.dashboard_head')
@section('content')

<div class="col-lg-8 m-auto">
  <table class="table" style="margin-top:40px">
    <thead class="grey lighten-2">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Picture</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $key)
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$key->name}}</td>
        <td> <img  width="50" src="{{asset($key->allimg)}}" >   </td>
        <td>
         <a href="#">Edit</a>
         <a href="#" class="btn dtn-danger">Delete</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
</div>



@endsection
