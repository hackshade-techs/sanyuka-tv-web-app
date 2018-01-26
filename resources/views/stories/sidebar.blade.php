<div class="col-md-4">
    <div id="related-posts">
      {{-- {{ dd($storyDetail->newsCategory) }} --}}
      @foreach ($storyDetail->story->storyDetails as $story)
        <!-- video item -->
        <div class="related-video-item">
            <div class="thumb">
                <small class="time">{{ $story->created_at->toTimeString() }}</small>
                <a href="{{ route('storyDetail.show', $storyDetail->slug) }}">
                    <img src="{{ asset($story->image) }}" alt="">
                </a>
            </div>
            <a href="{{ route('storyDetail.show', $storyDetail->slug) }}" class="title">{{ substr($story->title,0,30) }} ...</a>
            <a class="channel-name" href="#">{{ $story->story->name }}
                <span>
                    <i class="fa fa-check-circle"></i>
                </span>
            </a>
        </div>
        <!-- // video item -->
      @endforeach

    </div>
</div>
