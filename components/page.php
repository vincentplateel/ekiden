<# 

This is the base page template that defines the main document structure.
The first thing that happens here is including the helper functions file.
You can define all sorts of helper in there.

#>
<@~ ../lib/functions.php ~@>

<# 

Now we set the ":colorTheme" class that is added to the <html> element.

The actual option set for the "selectColorTheme" variable is defined in
the "theme.json" file under "options".

#>
<@~ if @{ selectColorTheme | def ('switcher') } != 'switcher' @> 
	<@~ set { :colorTheme: ' @{ selectColorTheme }' } @>
<@~ end ~@>

<!DOCTYPE html>
<html lang="fr" class="@{ template | sanitize }@{ :colorTheme }">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<# 

	The "@{ theme }" variable can be used to automatically build the correct path to your theme
	directory even, when renaming it.		
		
	#>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap  -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap-utilities.rtl.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap-utilities.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap-reboot.rtl.min.css">
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/bootstrap-grid.rtl.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/style.css">

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/responsive.css">

  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/colors/color1.css" id="colors">

  <!-- Carousel -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/owl.carousel.css">

  <!-- Animation Style -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/animate.css">

  <!-- Wow JS -->
  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/animate.min.css">

  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/swiper-bundle.min.css">

  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/magnific-popup.min.css">

  <link rel="stylesheet" type="text/css" href="/packages/@{ theme }/dist/css/map.min.css">

  <!-- Favicon and touch icons  -->
  <link href="images/icon/favicon.png" rel="apple-touch-icon-precomposed" sizes="48x48">
  <link href="images/icon/favicon.png" rel="apple-touch-icon-precomposed">
  <link href="images/icon/favicon.png" rel="shortcut icon">

  <!--[if lt IE 9]>
      <script src="/packages/@{ theme }/dist/js/html5shiv.js"></script>
      <script src="/packages/@{ theme }/dist/js/respond.min.js"></script>
  <![endif]-->
  
	<link href="/packages/@{ theme }/dist/main.css" rel="stylesheet">
	<script src="/packages/@{ theme }/dist/main.js" type="text/javascript"></script>
</head>
<body class="header-sticky">
	<# 

	The layout is included where the main content goes.		
		
	#>
	<@ layout.php @>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/jquery.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/jquery.cookie.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/owl.carousel.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/wow.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/count-down.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/magnific-popup.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/map.min.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/map.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/jquery-waypoints.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/jquery-countTo.js"></script>
  <script type="text/javascript" src="/packages/@{ theme }/dist/js/main.js"></script>
</body>
</html>
