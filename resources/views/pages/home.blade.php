@extends("app")

@section("content")
	
	<!-- Content -->
    <div class="container theme-showcase" role="main">
		<div class="jumbotron">
			<h1>Tracker</h1>
			@if (Auth::check())
			<p>Hi, {{ Auth::user()->name }}!</p>
			<p><a href="{{ action('AuthController@getLogout') }}" class="btn btn-primary">Logout</a></p>
			@else
			<p><a href="{{ action('AuthController@getLogin') }}" class="btn btn-primary">Login</a></p>
			<p><a href="{{ action('AuthController@getRegister') }}" class="btn btn-info">Register</a></p>
			@endif
		</div>
    </div>

@stop