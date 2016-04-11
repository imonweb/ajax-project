<!DOCTYPE html>

<html lang=“en”>

<head>

	<meta charset=“utf-8”>

	<title>Ajax Project</title>

	<meta name=“description” content=“Bootstrap”>

	<meta name="author" content="Imon Dela Rosa">

	<!-- Mobile Specific Meta -->

 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="_/css/styles.css">
<script src="http://localhost:35729/livereload.js"></script>

</head>

<body>

<div class="container-fluid">
	<div class="row">
		<div class="jumbotron">
			<h1 class="text-center">AJAX Project</h1>
		</div>
	</div>
</div>

 


<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
	  $('#search').keyup(function(){

	  	var search = $('#search').val();

	  	$.ajax({
	  		url:'search.php',
	  		data: {search: search},
	  		type:'POST',
	  		success: function(data){
	  			if(!data.error){
	  				$('#result').html(data);
	  			}
	  		}
	  	});
	  });
	});
</script>

<div id="container" class="col-xs-6 col-sm-6 col-md-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 text-center">
	<div class="form-group">
		<h2>Search Our Database</h2>
		<div class="col-sm-6 col-sm-offset-3">
		 
				<!-- <input type="text" class="form-control" name="search" id="search" placeholder="Search our inventory"> -->
				<form>
   <!-- <div class="input-group"> -->
     <input type="text" class="form-control" placeholder="Search our inventory" name="search" id="search">
    <!--  <div class="input-group-btn">
     <button class="btn btn-default btn-warning" type="submit"><i class="glyphicon glyphicon-search"></i></button>
     </div> -->
   <!-- </div> -->
</form>
				 
 
	</div>

	<br>
	<br>

	<h2 id="result"></h2>


</div>



</body>
</html>