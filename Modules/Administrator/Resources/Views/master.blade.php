<!--
Organization: Haqqman
Author: @sulaimanxyz
Webmaster: https://haqqman.com/webmaster
About Haqqman: https://haqqman.com
-->
<!DOCTYPE html>
<html>
<head>
    <title>Industry-leading Webmaster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Webmaster by Haqqman">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('webmaster-assets/assets/fonts/fontawesome/font-awesome.min.css') }}">
    <!-- Vendors-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('webmaster-assets/assets/vendors/bootstrap/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('webmaster-assets/assets/vendors/YTPlayer/css/jquery.mb.YTPlayer.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('webmaster-assets/assets/vendors/vegas/vegas.min.css') }}">
    <!-- App & fonts-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Work+Sans:300,400,500,700">
    <link rel="stylesheet" type="text/css" id="app-stylesheet" href="{{ URL::to('webmaster-assets/assets/css/main.css') }}"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div class="page-wrap" id="root">
  @yield('content')
</div>

<!-- Vendors-->
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/_jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/jquery.countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/flat-surface-shader/fss.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/particles.js/particles.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/waterpipe/waterpipe.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/quietflow/quietflow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/YTPlayer/jquery.mb.YTPlayer.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/vendors/vegas/vegas.min.js') }}"></script>
<!-- App-->
<script type="text/javascript" src="{{ URL::to('webmaster-assets/assets/js/main.js') }}"></script>
</body>
</html>
