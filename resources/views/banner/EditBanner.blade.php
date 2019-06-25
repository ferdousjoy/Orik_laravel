@extends('layouts.dashboard_head')

@section('content')
<div class="col-lg-6">
  <form action="/update/banner" method="post" enctype="multipart/form-data">
    @csrf
    <div id="contact-form" class="form-container" data-form-container>
    <div class="row">
      @if (session('success'))
            <div class="alert alert-info">
{{ session('success')}}
            </div>

            @endif
      <div class="form-title">
        <span> Update Banner Form</span>
      </div>
    </div>
    <div class="input-container">
      <div class="row">
        <span class="req-input" >
          <span class="input-status" data-toggle="tooltip" data-placement="top" title=" Enter Title"> </span>
          <input type="hidden" placeholder="Title" name="ban_id" value="{{$ban->id}}">
          <input type="text" placeholder="Title" name="title" value="{{$ban->title}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Text belorw Tiltle" name="detail" value="{{$ban->detail}}">
        </span>
      </div>
      <div class="row">
       <input type="file" class="custom-file-input" name="allimg" value="{{$ban->allimg}}">
      </div>



      <div class="row submit-row">
        <button type="submit" class="btn btn-block submit-form">Submit</button>
      </div>
    </div>
    </div>
    </form>
</div>

@endsection
