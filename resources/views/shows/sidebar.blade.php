<div class="col-md-4">
    <div id="related-posts">
      {{-- {{ dd($showDetail) }} --}}
      @foreach ($showDetail->show->showDetails as $showDetail)
        <!-- video item -->
        <div class="related-video-item">
            <div class="thumb">
                <small class="time">{{ $showDetail->created_at->toTimeString() }}</small>
                <a href="{{ route('showDetail.show', $showDetail->slug) }}">
                    <img src="{{ asset($showDetail->image) }}" alt="">
                </a>
            </div>
            <a href="{{ route('showDetail.show', $showDetail->slug) }}" class="title">{{ substr($showDetail->title,0,30) }} ...</a>
            <a class="channel-name" href="#">{{ $showDetail->show->name }}
                <span>
                    <i class="fa fa-check-circle"></i>
                </span>
            </a>
        </div>
        <!-- // video item -->
      @endforeach

    </div>
</div>
