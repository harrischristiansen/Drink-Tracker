@extends("app")

@section("content")
	
	<!-- Content -->
    <div class="container theme-showcase" role="main">
		<div class="jumbotron">
			<h1> - </h1>
			<p><a href="{{ action('AuthController@getLogin') }}" class="btn btn-primary">Login</a></p>
			<p><a href="{{ action('AuthController@getRegister') }}" class="btn btn-info">Register</a></p>
		</div>
    </div>

@stop