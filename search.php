<?php 
	$connection = mysqli_connect('localhost', 'imon', 'p@ssw0rd', 'ajax');
	if(!$connection){
		die("Database connection failed" . mysqli_error($connection));
	}

	$search = $_POST['search'];

	if(!empty($search)){
		$query = "SELECT * FROM cars WHERE cars LIKE '$search%' ";
		$search_query = mysqli_query($connection,$query);

		if(!$search_query){
			die('QUERY FAILED' . mysqli_error($connection));
		}

		while($row = mysqli_fetch_array($search_query)){
			$brand = $row['cars'];

			?>

			  
				 <table class='table table-bordered box-shadow--6dp'> 
				 <thead>
				 <!-- 	<tr>
				 		<th></th>
				 	</tr> -->
				 </thead>
				 <tbody>
				 <tr> 
				 <!-- <th>Brand</th>  -->
			<?php
				echo "<td>{$brand} in stock</td>";
			?>
				 </tr> 
				 </tbody>
				 </table> 
		 

		 


	<?php	}
	}
 ?>