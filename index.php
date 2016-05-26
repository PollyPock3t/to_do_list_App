<?php

include ("obj/dbCon.php");

$sql = "SELECT * FROM to_do_Tasks";

//Execute SQL command

$rec = $conn->query($sql);

$num = $rec->num_rows;

echo $num;

?> 

<!DOCTYPE html>

<html>

	<head>
		<title> TO DO LIST </title>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/custom.css"/>
	</head>
	<body>

	<div class="conatiner">
		<div class="row"></div>
		<div class="col-md-1"></div>
		<div class="col-md-10"></div>

		<!-- wrapping inputfield around button so it can take us to dtat file -->


			<form id="todoForm" action="processData.php" method="Post">

			<!-- Name is in needed for php to grab data-->

			<input type="text" class="form-control" placeholder="Text input" id="taskInput" name="taskInput">


			<button class="btn btn-default" type="submit" id="actionBtn">Button</button>

			</form>

	<div class="col-md-1"></div>

	</div>

	<div class="row"></div>
		<div class="col-md-12"></div>

		<?php

			for($i = 0; $i < $num; $i ++){
				$row = mysqli_fetch_array($rec);
			}
			
		?>

	</body>


	<script src="js/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/validator.js"></script>

	</body>

</html>








