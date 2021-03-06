@foreach ($news->chunk(3) as $chunk)
  <div class="row">
        @foreach ($chunk as $post)
          <!-- video-item -->
          <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="video-item">
                  <div class="thumb">
                      <div class="hover-efect"></div>
                      <small class="time">{{ $post->created_at->toTimeString() }}</small>
                      <a href="{{ route('news.show', $post->slug) }}"><img src="{{ asset($post->image) }}" alt=""></a>
                  </div>
                  <div class="video-info">
                      <a href="{{ route('news.show', $post->slug) }}" class="title" style="text-transform:capitalize;">{{ $post->title }}</a>
                      <a class="channel-name" href="#">{{ $post->newsCategory->name }}<span>
                      <i class="fa fa-check-circle"></i></span></a>
                      <span class="date"><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</span>
                  </div>
              </div>
          </div>
          <!-- // video-item -->
        @endforeach
    </div>
@endforeach
