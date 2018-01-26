<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sanyuka Television</title>
        <meta name="keywords" content="Blog website templates" />
        <meta name="description" content="Sanyuka Television">
        <meta name="author" content="Hackshade Techs">
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
        {{-- @if (request()->is('/')) --}}
        <style type="text/css">
          body { background-color: #fff; padding: 0 20px;
               color:#000; font: 13px/18px Arial, sans-serif; }
           a { color: #360; }
          h3 { padding-top: 20px; }
          ol { margin:5px 0 15px 16px; padding:0; list-style-type:square; }

        </style>
        <script type='text/javascript' src='swfobject.js'></script>
        {{-- @endif --}}

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
  {{-- @if (request()->is('/')) --}}
  <script type='text/javascript'>
    var so = new SWFObject('player.swf','mpl','470','290','9');
    so.addParam('allowfullscreen','true');
    so.addParam('allowscriptaccess','always');
    so.addParam('wmode','opaque');
    so.addVariable('file','avatar.flv');
    so.addVariable('streamer','rtmp://174.138.84.246:1935/live');
    so.write('mediaspace');
  </script>
  {{-- @endif --}}

	</body>
</html>
