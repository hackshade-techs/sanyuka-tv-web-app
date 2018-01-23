<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Video Post – Video Sharing HTML Template</title>
        <meta name="keywords" content="Blog website templates" />
        <meta name="description" content="Author - Personal Blog Wordpress Template">
        <meta name="author" content="Rabie Elkheir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
      <!--======= header =======-->
      @include('includes.header')
      @include('includes.category')

	  <div class="site-output">
      	@include('includes.sidebar')

        <div id="all-output" class="col-md-10">
              @yield('content')
        </div>
    </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/grid-blog.min.js') }}"></script>

  <script type="text/javascript">
  <ais-index app-id="{{ config('scout.algolia.id') }}"
         api-key="{{ env('ALGOLIA_SEARCH') }}"
         index-name="news">

    <ais-input placeholder="Search contacts..."><ais-input>

    <ais-results>
       <template scope="{ result }">
         <div>
           <h1>@{{ result.title }}</h1>
           <ul>
             <li>@{{ result.description }}</li>
           </ul>
         </div>
       </template>
    </ais-results>

    </ais-index>
  </script>



	</body>
</html>