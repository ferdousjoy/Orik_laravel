@extends('layouts.dashboard_head')
@section('content')
<style>
th{
  text-align: center;
  text-transform: capitalize;
  color: #fff;
  font-size: 20px;

}
thead{
   background-image: linear-gradient(to right top, #0d0709, #403a39, #766f6c, #afaba3, #e8ebe1);
}
</style>
<h1>Service List</h1>
<table class="table table-bordered">
  <thead>
    <tr>

      <th>Title</th>
      <th>Detail</th>
      <th>Image</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($key as $key)
    <tr>
      <td>{{$key->title}}</td>
      <td>{{$key->detail}}</td>
      <td><img width="80" src="{{asset($key->allimg)}}"></td>

      <td>
        <!-- Button trigger modal -->
   <a class="btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" href="#">
     Delete
   </a>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-body">
          Do you want To delete?
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <a href="{{route('dlservice', $key->id)}}" class="btn btn-danger">Delete</a>
         </div>
       </div>
     </div>
   </div>




      </td>

    </tr>

    @endforeach

  </tbody>
</table>

@endsection
