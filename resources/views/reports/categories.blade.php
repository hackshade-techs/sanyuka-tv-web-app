<div class="col-md-2">
    <ul class="category-menu">
      @foreach ($newsCategories as $newsCategory)
        <li class=""><a href="{{ url("peoples-reports/news-categories/$newsCategory->slug") }}">{{ $newsCategory->name }}</a></li>
      @endforeach
    </ul>

    <div class="share-in">
      <h1 class="title">Share in</h1>
        <ul class="social-link">
          <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> 11200 </a></li>
          <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> 514 </a></li>
          <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i> 514 </a></li>
          <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i> 155 </a></li>
        </ul>
    </div>

    {{-- <div class="advertising-block">
      <h1 class="title">Advertising</h1>
        <div class="advertising-code">
          <a href="#"><img src="demo_img/adv.jpg" alt=""></a>
        </div>
    </div> --}}
</div><!-- // col-md-2 -->
