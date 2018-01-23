<header>
  <div class="container-full">
    <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-12">
              <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md"  href="#">
                <i class="fa fa-navicon"></i>
              </a>
              <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                <i class="fa fa-close"></i>
              </a>
              <div id="logo">
                  <a href="{{ url('/') }}"><img src="img/logo.png" alt=""></a>
              </div>
          </div><!-- // col-md-2 -->
          <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
              <div class="search-form" id="app">

                  <template>
                    <ais-index
                      app-id="{{ config('scout.algolia.id') }}"
                      api-key="{{ env('ALGOLIA_SEARCH') }}"
                      index-name="news"
                    >
                      <ais-search-box  placeholder="Search here videos..."></ais-search-box>
                      <ais-stats></ais-stats>
                      <ais-results>
                        <template slot-scope="{ result }">
                          <h2>
                            <a :href="'news/'+result.slug">
                              <ais-highlight :result="result" attribute-name="title"></ais-highlight>
                            </a>
                          </h2>
                        </template>
                      </ais-results>
                    </ais-index>
                  </template>

                  {{-- <form id="search" action="#" method="post">
                      <input type="text" placeholder="Search here video posts..."/>
                      <input type="submit" value="Keywords" />
                  </form> --}}
              </div>
          </div><!-- // col-md-3 -->
          <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
              <ul class="top-menu">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li><a href="{{ url('contact-us') }}">Send Feedback</a></li>
              </ul>
          </div><!-- // col-md-4 -->


      </div><!-- // row -->
  </div><!-- // container-full -->
</header><!-- // header -->
