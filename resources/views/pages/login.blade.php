@extends("app")

@section("content")
	
	<!-- Content -->
	<div id="centerContainer"><div id="centerElement">
		<div id="loginForm" class="row">
			<div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
				<input id="loginField" type="password" name="password" id="password" class="form-control">
			</div>
		</div>
	</div></div>
	
	<a id="registerBtn" href="{{ action('AuthController@getRegister') }}">+</div>

@stop