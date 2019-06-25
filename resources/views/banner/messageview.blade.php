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
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Date</th>
      <th>name</th>
      <th>email</th>
      <th>phone</th>
      <th>subject</th>
      <th>message</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($msg as $key)
    <tr>
      <td>{{$key->created_at}}</td>
      <td>{{$key->name}}</td>

      <td>{{$key->email}}</td>
      <td>{{$key->phone}}</td>

      <td>{{$key->subject}}</td>
      <td>{{$key->message}}</td>
      <td>
        <!-- Button trigger modal -->

   <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="#">
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
           <a href="{{route('dl', $key->id)}}" class="btn btn-secondary">delete</a>
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
