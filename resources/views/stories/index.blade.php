@foreach ($storyDetails->chunk(3) as $chunk)
  <div class="row">
        @foreach ($chunk as $storyDetail)
          <!-- video-item -->
          <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="video-item">
                  <div class="thumb">
                      <div class="hover-efect"></div>
                      <small class="time">{{ $storyDetail->created_at->toTimeString() }}</small>
                      <a href="{{ route('storyDetail.show', $storyDetail->slug) }}"><img src="{{ asset($storyDetail->image) }}" alt=""></a>
                  </div>
                  <div class="video-info">
                      <a href="{{ route('storyDetail.show', $storyDetail->slug) }}" class="title" style="text-transform:capitalize;">{{ $storyDetail->title }}</a>
                      <a class="channel-name" href="#">{{ $storyDetail->story->name }}<span>
                      <i class="fa fa-check-circle"></i></span></a>
                      <span class="date"><i class="fa fa-clock-o"></i>{{ $storyDetail->created_at->diffForHumans() }}</span>
                  </div>
              </div>
          </div>
          <!-- // video-item -->
        @endforeach
    </div>
@endforeach
