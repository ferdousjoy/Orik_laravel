@extends('layouts.dashboard_head')
@section('content')
<div class="col-lg-6">
  <form action="/slider/insert" method="post" enctype="multipart/form-data">
    @csrf
    <div id="contact-form" class="form-container" data-form-container>
      <div>
        @if (session('success'))
              <div class="alert alert-info">
      {{ session('success')}}
    </div> <br>
              @endif
      </div>
    <div class="row">
      <div class="form-title" style="padding-left:32%;">
        <span> Slider Form</span>
      </div>
    </div>
    <div class="input-container">
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below picture"> </span>
          <input type="text" placeholder="Text belorw Tiltle" name="detail">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter people name"> </span>
          <input type="text" placeholder="name" name="name">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter people text"> </span>
          <input type="text" placeholder="designation" name="designation">
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
</div>

@endsection
