@foreach ($showDetails->chunk(3) as $chunk)
  <h1 class="new-video-title"><i class="fa fa-bolt"></i> Trending</h1>
  <div class="row">
        @foreach ($chunk as $showDetail)
          <!-- video-item -->
          <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="video-item">
                  <div class="thumb">
                      <div class="hover-efect"></div>
                      <small class="time">{{ $showDetail->created_at->toTimeString() }}</small>
                      <a href="{{ route('showDetail.show', $showDetail->slug) }}"><img src="{{ asset($showDetail->image) }}" alt=""></a>
                  </div>
                  <div class="video-info">
                      <a href="{{ route('showDetail.show', $showDetail->slug) }}" class="title" style="text-transform:capitalize;">{{ $showDetail->title }}</a>
                      <a class="channel-name" href="#">{{ $showDetail->show->name }}<span>
                      <i class="fa fa-check-circle"></i></span></a>
                      <span class="date"><i class="fa fa-clock-o"></i>{{ $showDetail->created_at->diffForHumans() }}</span>
                  </div>
              </div>
          </div>
          <!-- // video-item -->
        @endforeach
    </div>
@endforeach
