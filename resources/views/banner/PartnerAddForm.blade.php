@extends('layouts.dashboard_head')
@section('content')
<div class="col-lg-6">
  <form action="/Partner/insert" method="post" enctype="multipart/form-data">
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
        <span> Partner Form</span>
      </div>
    </div>
    <div class="input-container">
      <div class="row">
       <label for=""> Partner Company logo</label>
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
