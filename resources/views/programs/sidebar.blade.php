<div class="col-md-4">
    <div id="related-posts">
      @foreach ($program->day->programs as $program)
        <!-- video item -->
        <div class="related-video-item">
            <div class="thumb">
                <small class="time">{{ $program->start }}</small>
                <a href="{{ route('programs.show', $program->slug) }}">
                    <img src="{{ asset($program->image) }}" alt="">
                </a>
            </div>
            <a href="{{ route('programs.show', $program->slug) }}" class="title">{{ substr($program->title,0,30) }} ...</a>
            <a class="channel-name" href="#">{{ $program->day->name }}
                <span>
                    <i class="fa fa-check-circle"></i>
                </span>
            </a>
        </div>
        <!-- // video item -->
      @endforeach

    </div>
</div>
