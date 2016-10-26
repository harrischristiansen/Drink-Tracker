@extends("app")

@section("content")
	
	<!-- Content -->
	<div id="centerContainer"><div id="centerElement">
		<div id="registerForm" class="row">
			<form method="post" action="/register" class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4 validate">
				<input id="registerName" type="text" name="name" id="name" placeholder="Name" class="form-control" data-bvalidator="required" data-bvalidator-msg="Name Required">
				<br>
				<input id="registerPass" type="password" name="password" id="password" placeholder="Password" class="form-control" data-bvalidator="required,rangelength[4:4]" data-bvalidator-msg="Password Required">
				<br>
				<input type="submit" value="Create" class="btn btn-primary">
			</form>
		</div>
	</div></div>

@stop