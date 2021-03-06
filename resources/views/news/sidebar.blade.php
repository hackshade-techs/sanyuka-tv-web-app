<div class="col-md-4">
    <div id="related-posts">
      {{-- {{ dd($news->newsCategory) }} --}}
      @foreach ($news->newsCategory->news as $relatedPost)
        <!-- video item -->
        <div class="related-video-item">
            <div class="thumb">
                <small class="time">{{ $relatedPost->created_at->toTimeString() }}</small>
                <a href="{{ route('news.show', $relatedPost->slug) }}">
                    <img src="{{ asset($relatedPost->image) }}" alt="">
                </a>
            </div>
            <a href="{{ route('news.show', $relatedPost->slug) }}" class="title">{{ substr($relatedPost->title,0,30) }} ...</a>
            <a class="channel-name" href="#">{{ $relatedPost->newsCategory->name }}
                <span>
                    <i class="fa fa-check-circle"></i>
                </span>
            </a>
        </div>
        <!-- // video item -->
      @endforeach

    </div>
</div>
