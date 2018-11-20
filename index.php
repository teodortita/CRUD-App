<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width-device=width, initial-scale=1" />
	<title>CRUD-App</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">

	<!-- Latest minified jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	 crossorigin="anonymous"></script>
</head>

<body>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 offset-md-3 jumbotron">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center text-primary">CRUD-App (with AJAX/jQuery)</h2>
					<hr>
					<div class="mx-5">
						<form class="form-inline">
							<div class="form-group">
								<label>Firstname:</label>
								<input type="text" id="firstname" class="form-control">
							</div>
							<div class="form-group">
								<label>Lastname:</label>
								<input type="text" id="lastname" class="form-control">
							</div>
							<div class="form-group">
								<button type="button" id="addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div id="userTable"></div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function () {
		showUser();

		//Add
		$(document).on('click', '#addnew', function () {
			if ($('#firstname').val() == "" || $('#lastname').val() == "") {
				alert('Please input data first');
			} else {
				$firstname = $('#firstname').val();
				$lastname = $('#lastname').val();
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						firstname: $firstname,
						lastname: $lastname,
						add: 1,
					},
					success: function () {
						showUser();
					}
				});
			}
		});

		//Delete
		$(document).on('click', '.delete', function () {
			$id = $(this).val();
			$.ajax({
				type: "POST",
				url: "delete.php",
				data: {
					id: $id,
					del: 1,
				},
				success: function () {
					showUser();
				}
			});
		});

		//Update
		$(document).on('click', '.updateuser', function () {
			$uid = $(this).val();
			$('#edit' + $uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$ufirstname = $('#ufirstname' + $uid).val();
			$ulastname = $('#ulastname' + $uid).val();
			$.ajax({
				type: "POST",
				url: "update.php",
				data: {
					id: $uid,
					firstname: $ufirstname,
					lastname: $ulastname,
					edit: 1,
				},
				success: function () {
					showUser();
				}
			});
		});

	});

	//Show
	function showUser() {
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data: {
				show: 1
			},
			success: function (response) {
				$('#userTable').html(response);
			}
		});
	}
</script>

</html>