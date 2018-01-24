@foreach ($programs as $program)

  <!-- Chanels Item -->
      <div class="col-md-6">
          <div class="chanel-item">
              <div class="chanel-thumb">
                  <a href="{{ route('programs.show', $program->slug) }}"><img src="{{ asset($program->image) }}" alt=""></a>
              </div>
              <div class="chanel-info">
                  <a class="title" href="{{ route('programs.show', $program->slug) }}">{{ $program->title }}</a>
                  <span class="subscribers">Start: {{ $program->start }}</span>
                  <span class="subscribers">End: {{ $program->end }}</span>
              </div>
              <a href="#" class="subscribe">{{ $program->day->name }}</a>
          </div>
       </div>

@endforeach
