@extends('layouts.app')

@section('content')

  <div class="row">
      <!-- Watch -->
      <div class="col-md-8">
          <div id="watch">

              <!-- Video Player -->
              <h1 class="video-title" style="text-transform:capitalize;">{{ $news->title }}</h1>
              <div class="video-code">
                  <iframe width="100%" height="415" src="{{ asset($news->video_url) }}" frameborder="0" allowfullscreen></iframe>
              </div>
              <!-- // video-code -->

              <div class="video-share">
                  <ul class="like">
                      <li>
                          <a class="deslike" href="#">1250
                              <i class="fa fa-thumbs-down"></i>
                          </a>
                      </li>
                      <li>
                          <a class="like" href="#">1250
                              <i class="fa fa-thumbs-up"></i>
                          </a>
                      </li>
                  </ul>
                  <ul class="social_link">
                      <li>
                          <a class="facebook" href="#">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a class="youtube" href="#">
                              <i class="fa fa-youtube-play" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a class="linkedin" href="#">
                              <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a class="google" href="#">
                              <i class="fa fa-google-plus" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a class="twitter" href="#">
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a class="rss" href="#">
                              <i class="fa fa-rss" aria-hidden="true"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- // Social -->
              </div>
              <!-- // video-share -->
              <!-- // Video Player -->

              <p> {!! $news->description !!} </p>
              <!-- Chanels Item -->
              <div class="chanel-item">

              </div>
              <!-- // Chanels Item -->


              <!-- Comments -->
              <div id="comments" class="post-comments">
                <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                var disqus_config = function () {
                this.page.url = {{ $news->slug }};  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = {{ $news->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://sanyukatv-1.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              </div>
              <!-- // Comments -->


          </div>
          <!-- // watch -->
      </div>
      <!-- // col-md-8 -->
      <!-- // Watch -->

      <!-- Related Posts-->
      @include('news.sidebar')
      <!-- // col-md-4 -->
      <!-- // Related Posts -->
  </div>
  <!-- // row -->

@endsection
