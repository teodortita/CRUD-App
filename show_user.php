<?php
include 'conn.php';
if (isset($_POST['show'])) {
    ?>
<table class="table table-bordered alert-warning table-hover">
	<thead>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php
$quser = mysqli_query($conn, "select * from `user`");
    while ($urow = mysqli_fetch_array($quser)) {
        ?>
		<tr>
			<td>
				<?php echo $urow['firstname']; ?>
			</td>
			<td>
				<?php echo $urow['lastname']; ?>
			</td>
			<td>
				<button class="btn btn-success btn-block" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>">
				Edit</button>
				<button class="delete btn btn-danger btn-block" value="<?php echo $urow['userid']; ?>">
				Delete</button>
				<?php include 'edit_modal.php';?>
			</td>
		</tr>
		<?php
}

    ?>
	</tbody>
</table>
<?php
}

?>