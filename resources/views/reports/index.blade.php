@foreach ($reports->chunk(3) as $chunk)
  <div class="row">
        @foreach ($chunk as $report)
          <!-- video-item -->
          <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="video-item">
                  <div class="thumb">
                      <div class="hover-efect"></div>
                      <small class="time">{{ $report->created_at->toTimeString() }}</small>
                      <a href="{{ route('reports.show', $report->slug) }}"><img src="{{ asset($report->file) }}" alt=""></a>
                  </div>
                  <div class="video-info">
                      <a href="{{ route('reports.show', $report->slug) }}" class="title" style="text-transform:capitalize;">{{ $report->title }}</a>
                      <a class="channel-name" href="#">{{ $report->newsCategory->name }}<span>
                      <i class="fa fa-check-circle"></i></span></a>
                      <span class="date"><i class="fa fa-clock-o"></i>{{ $report->created_at->diffForHumans() }}</span>
                  </div>
              </div>
          </div>
          <!-- // video-item -->
        @endforeach
    </div>
@endforeach
