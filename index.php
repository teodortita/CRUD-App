<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD-App</title>

	<!-- Latest minified jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/app.css"/>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card my-5">
					<div class="card-body">

						<h4 class="card-title text-center font-weight-bold">CRUD-App (with MySQL, AJAX/jQuery)</h4>

						<form class="form-inline">
							<div class="form-group">
								<label class="mr-2">Firstname:</label>
								<input type="text" id="firstname" class="form-control">
							</div>
							<div class="form-group">
								<label class="mr-2">Lastname:</label>
								<input type="text" id="lastname" class="form-control">
							</div>
							<div class="form-group">
								<button type="button" id="addnew" 
									class="btn btn-lg btn-primary text-uppercase ml-3">Add</button>
							</div>
						</form>

						<hr class="mt-3">
						<div id="userTable"></div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript" src="js/app.js"></script>

</html>