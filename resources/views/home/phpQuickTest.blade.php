@extends('layout.main_layout')
@section('content')
<section>
	<div class="container" style="padding:150px 0px">
		<h2>PHP Quick Test</h2>
		
		<label for="letter">Letter:</label><br>
		<input type="text" id="letter" name="letter"><br>
		<label for="number">Number:</label><br>
		<input type="number" id="number" name="number"><br><br>
		<input onclick="addCode()" type="submit" value="Submit">
		<div id="text-answer"></div>	
	</div>

</section>
<br>
@endsection
@include('home.partials.quickTestScript')

