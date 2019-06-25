@extends('layouts.dashboard_head')
@section('content')
<div class="col-lg-6">
  <form action="/product/update/product" method="post" enctype="multipart/form-data">
    @csrf
    <div id="contact-form" class="form-container" data-form-container>
    <div class="row">
      @if (session('success'))
            <div class="alert alert-info">
{{ session('success')}}
            </div>

            @endif
      <div class="form-title">
        <span> Update Product Form</span>
      </div>
    </div>
    <div class="input-container">
      <div class="row">
        <span class="req-input" >
          <span class="input-status" data-toggle="tooltip" data-placement="top" title=" Enter Name"> </span>
          <input type="text" placeholder="Name" name="name" value="{{$ban->name}}">
          <input type="hidden" placeholder="Name" name="product_id" value="{{$ban->id}}">
        </span>
      </div>

      <div class="row">
       <input type="file" class="custom-file-input" name="allimg">
      </div>



      <div class="row submit-row">
        <button type="submit" class="btn btn-block submit-form">Submit</button>
      </div>
    </div>
    </div>
    </form>


    <a   href="{{ route('ProductTable')}}" class="btn btn-success"> Product List</a>

</div>

@endsection
