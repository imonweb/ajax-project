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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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

		setInterval(function(){
			updateCars();
		}, 1000);

		function updateCars(){


		$.ajax({
	  	url: 'display_cars.php',
	  	type: 'POST',
	  	success: function(show_cars){
	  	 
	  			$("#show-cars").html(show_cars);
	  	 
	  	}
	  });

} // updateCars

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
	  // This code add cars to database table cars
	  $("#add-car-form").submit(function(e){
	  	e.preventDefault();
	  	var postData = $(this).serialize();
	  	var url = $(this).attr('action');

  
  		$.post(url, postData, function(php_table_data){

  		$("#car-result").html(php_table_data);

  		}); 
			 
	  }); // Add car code function ends

	  

	}); // Doc ready function
</script>

<div id="container" class="col-xs-6 col-sm-6 col-md-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 text-center">
	<div class="form-group">
	<div class="row">
		
	
		<h2>Search Our Database</h2>
		<div class="col-sm-6 col-sm-offset-3">
		 
				<!-- <input type="text" class="form-control" name="search" id="search" placeholder="Search our inventory"> -->
			 
   <!-- <div class="input-group"> -->
     <input type="text" class="form-control" placeholder="Search our inventory" name="search" id="search">
    <!--  <div class="input-group-btn">
     <button class="btn btn-default btn-warning" type="submit"><i class="glyphicon glyphicon-search"></i></button>
     </div> -->
 
				 
 
	</div>

	<br>
	<br>

	<!-- <h2 id="result"></h2> -->

	</div> <!-- row -->

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			
	
		<form action="add_cars.php" id="add-car-form" method="post">
		 
   <div class="input-group">
     <input type="text" class="form-control" placeholder="Type car brand" name="car_name">
     <div class="input-group-btn">
     	<button class="btn btn-default" type="submit">Add car <i class="fa fa-automobile"></i></button>
     </div>

		</form>
	</div>


			</div> <!-- col-sm-8 -->


	<div class="col-sm-6">
		<div id="car-result">
			
		</div>
	</div> <!-- colsm6 -->
 


	</div> <!-- row -->

<!-- LIST OF CARS RESULT -->
<h2 id="result"></h2>

<div class="row">
	<div class="col-sm-6">
		<!-- <table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody id="show-cars">
	 

			</tbody>
		</table>	 -->


	</div> <!-- col -->
</div> <!-- row -->



</body>
</html>