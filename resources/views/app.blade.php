<!DOCTYPE HTML>
<html><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

	<title>HTML5 Boilerplate</title>
	<link REL="icon" HREF="/images/fav.png">

	<meta name="author" content="Harris Christiansen">
	<meta name="description" content="HTML5 Boilerplate - Harris Christiansen">
	<meta name="keywords" content="harris, christiansen, html5, boilerplate">

	<!-- BValidator -->
	<link href="/css/bvalidator.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery UI -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Bootstrap IE8 Support -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Fonts -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!-- Site CSS -->
	<link rel="stylesheet" type="text/css" href="/css/site.css">
	
</head><body>
	
	@if (false)
	
	<!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Alcohol</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Alcohol</a></li>
					<li><a href="/table.html">Table</a></li>
					<li><a href="/form.html">Form</a></li>
				</ul>
			</div>
		</div>
    </nav>
    
    @endif

	@yield('content')

	<!-- ----- Javascript ----- -->
	
	<!-- jQuery / jQuery UI -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/jquery.cookie.js"></script>
	
	<!-- BValidator -->
	<script type="text/javascript" src="/js/jquery.bvalidator-yc.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!-- Tablesorter -->
	<script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
	
	<!-- Site JS -->
	<script type="text/javascript" src="/js/site.js"></script>
</body></html>