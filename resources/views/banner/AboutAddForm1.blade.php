@extends('layouts.dashboard_head')
@section('content')
<div class="col-lg-6">
  <form action="/about/insert" method="post" enctype="multipart/form-data">
    @csrf
    <div id="contact-form" class="form-container" data-form-container>
    <div class="row">
      @if (session('success'))
            <div class="alert alert-info">
{{ session('success')}}
            </div>

            @endif
      <div class="form-title">
        <span> About Form</span>
      </div>
    </div>
    <div class="input-container">
      <div class="row">
        <span class="req-input" >
          <span class="input-status" data-toggle="tooltip" data-placement="top" title=" Enter Title"> </span>
          <input type="text" placeholder="Title" name="title">
        </span>
      </div>
      <div class="row">
        <span class="req-input">
          <span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter text below Tilte"> </span>
          <input type="text" placeholder="Text belorw Tiltle" name="detail">
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
