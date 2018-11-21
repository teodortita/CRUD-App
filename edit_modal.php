<div class="modal fade" id="edit<?php echo $urow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
$n = mysqli_query($conn, "select * from `user` where userid='" . $urow['userid'] . "'");
$nrow = mysqli_fetch_array($n);
?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<div class = "modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class = "text-success modal-title text-center">Update Member</h3>
			</div>
			<form class="form-inline">
				<div class="modal-body mt-2">
					<div class="mt-3">
						Firstname: <input type="text" value="<?php echo $nrow['firstname']; ?>" id="ufirstname<?php echo $urow['userid']; ?>" class="form-control">
					</div>
					<div class="mt-3">
						Lastname: <input type="text" value="<?php echo $nrow['lastname']; ?>" id="ulastname<?php echo $urow['userid']; ?>" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<div>
						<button type="button" class="btn btn-default btn-block" data-dismiss="modal">
						Cancel</button>
					</div>
					<div>
						<button type="button" class="updateuser btn btn-success btn-block" value="<?php echo $urow['userid']; ?>">
						Save</button>
					</div>
				</div>
			</form>
  	</div>
	</div>
</div>