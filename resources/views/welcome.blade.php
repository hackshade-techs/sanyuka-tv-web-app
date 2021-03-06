@extends('layouts.app')

@section('content')

<div class="row">
              	<!-- Watch -->
    <div class="col-md-12">
    	<div id="watch">

            <!-- Video Player -->
            <h1 class="video-title">Sanyuka Live Television</h1>
            <div class="video-code">
              <div id='mediaspace'>This text will be replaced</div>
            </div><!-- // video-code -->

            <div class="video-share">
            	<ul class="like">
                	<li><a class="deslike" href="#">1250 <i class="fa fa-thumbs-down"></i></a></li>
                	<li><a class="like" href="#">1250 <i class="fa fa-thumbs-up"></i></a></li>
                </ul>
                <ul class="social_link">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                </ul><!-- // Social -->
            </div><!-- // video-share -->
            <!-- // Video Player -->

        </div><!-- // watch -->
    </div><!-- // col-md-12 -->
<!-- // Watch -->

</div><!-- // row -->

@endsection
