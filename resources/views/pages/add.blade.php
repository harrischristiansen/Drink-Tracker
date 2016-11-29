@extends("app")

@section("content")
	
	<!-- Content -->
	<div id="centerContainer"><div id="centerElement">
		<div id="addForm" class="row">
			<form method="post" action="/add" class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4 validate">
				<select name="drink" id="drink" class="form-control" data-bvalidator="required">
					<option value=""> - Select - </option>
					<option value="Vodka">Vodka</option>
					<option value="Rum">Rum</option>
					<option value="Scotch">Scotch</option>
					<option value="Tequila">Tequila</option>
				</select>
				<br>
				<div id="difficulty_slider">
					<div id="difficulty_min">💧</div>
					<div id="difficulty_max">☠️</div>
				</div>
				<input type="hidden" id="difficulty" name="difficulty">
				<br>
				<input id="when" type="text" name="when" placeholder="When ?" class="form-control" data-bvalidator="required">
				<br>
				<input type="submit" value="Add" class="btn btn-primary">
			</form>
		</div>
	</div></div>

@stop