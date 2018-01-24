@extends('layouts.app')

@section('content')

  <div id="upload">
      <div class="row">
          <!-- upload -->
          <div class="col-md-8">
              <h1 class="page-title">
                  <span>Send Us</span> A Message</h1>
                  @include('includes.success')
                  @include('includes.errors')
              <form action="{{ route('feedback.store') }}" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                      <div class="col-md-6">
                          <label>First Name</label>
                          <input type="text" class="form-control" name="first_name" placeholder="First Name">
                      </div>
                      <div class="col-md-6">
                          <label>Last Name</label>
                          <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                      </div>
                      <div class="col-md-6">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>
                      <div class="col-md-6">
                          <label>Subject</label>
                          <input type="text" class="form-control" name="subject" placeholder="Subject">
                      </div>
                      <div class="col-md-12">
                          <label>Message</label>
                          <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                      </div>

                      <div class="col-md-6">
                          <button type="submit" id="contact_submit" class="btn btn-dm">Save your post</button>
                      </div>
                  </div>
              </form>
          </div>
          <!-- // col-md-8 -->

          <div class="col-md-4">
              <a href="#">
                  <img src="demo_img/upload-adv.png" alt="">
              </a>
          </div>
          <!-- // col-md-8 -->
          <!-- // upload -->
      </div>
      <!-- // row -->
  </div>
  <!-- // upload -->

@endsection
