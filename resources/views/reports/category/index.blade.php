@extends('layouts.app')

@section('content')

  <!-- Category Cover Image -->
  <div id="category-cover-image">
  	<div class="image-in">
      	<img src="{{ asset('demo_img/category-img.jpg') }}" alt="">
      </div>
  	<h1 class="title"><i class="fa fa-music"></i> News</h1>
      <ul class="category-info">
      	<li>97,174,199 subscribers </li>
      	<li>255,525,456 Views</li>
      	<li>45,23,65 Channel No</li>
      	<li class="subscribe"><a href="#">Subscribe</a></li>
      </ul>
  </div>
  <!-- // Category Cover Image -->

  <!-- category -->
  <div id="category">
  	<div class="row">
          @include('news.categories')
          <div class="col-md-10">
              @include('reports.category.category')
              <!-- Loading More Videos -->
              <div id="loading-more">
                  <i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span>
              </div>
              <!-- // Loading More Videos -->
          </div>
      </div><!-- // row -->
  </div>
  <!-- // category -->

@endsection
