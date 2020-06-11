@extends('layout.main_layout')
@section('content')
<section>
	<div class="container" style="padding:150px 0px">
		<h2>PHP Quick Test</h2>
		<form id="phpquicktest-form">
			<label for="letter">Letter:</label><br>
			<input type="text" id="letter" name="letter"><br>
			<label for="number">Number:</label><br>
			<input type="number" id="number" name="number"><br><br>
			<input onclick="myJsFunction()" type="submit" value="Submit">
		</form> 
	</div>
	<div class="text-answer">

	</div>
</section>
<br>
@endsection
<script type="text/javascript">
$(document).ready(function(){
	function myJsFunction(){
	   var ltr=document.getElementById('letter').value;
	   var num=document.getElementById('number').value;
	}
	$('#phpquicktest-form').on('submit', function() {
		console.log(ltr);
		console.log(num);
		$('.text-answer').append(ltr);
		$('.text-answer').append(num);
	})
	
})
</script>