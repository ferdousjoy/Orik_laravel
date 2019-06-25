@extends('layouts.dashboard_head')
@section('content')
<div class="col-lg-6">
  <form action="/experience/update" method="post" enctype="multipart/form-data">
    @csrf
    <div id="contact-form" class="form-container" data-form-container>
    <div class="row">
      @if (session('success'))
            <div class="alert alert-info">
{{ session('success')}}
            </div>

            @endif
      <div class="form-title">
        <span>Update  Experience Add Form</span>
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
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter Year"> </span>
          <input type="text" placeholder="Year" name="year" value="{{$ban->year}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter Main Title"> </span>
          <input type="text" placeholder="Main Title" name="maintitle" value="{{$ban->maintitle}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Main Detail" name="detail" value="{{$ban->detail}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Main Tiltle" name="maintitle2" value="{{$ban->maintitle2}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Main Detail" name="detail2" value="{{$ban->detail2}}">
        </span>
      </div>

      <div class="row">
        <span class="req-input" >
          <span class="input-status" data-toggle="tooltip" data-placement="top" title=" Enter Title"> </span>

          <input type="text" placeholder="Title" name="title2" value="{{$ban->title2}}">

        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter Year"> </span>
          <input type="text" placeholder="Year" name="year2" value="{{$ban->year2}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter Main Title"> </span>
          <input type="text" placeholder="Main Title" name="maintitle3" value="{{$ban->maintitle3}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Main Detail" name="detail3" value="{{$ban->detail3}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Main Tiltle" name="maintitle4" value="{{$ban->maintitle4}}">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Main Detail" name="detail4" value="{{$ban->detail4}}">
        </span>
      </div>

      <div class="row submit-row">
        <button type="submit" class="btn btn-block submit-form">Submit</button>
      </div>
    </div>
    </div>
    </form>
</div>

@endsection
