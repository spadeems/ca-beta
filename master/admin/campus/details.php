<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-details.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Details</a>

				<h1>Details</h1>
				<p>This table includes <?php echo counting("details", "id");?> details.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Fname</th>
			<th>Lname</th>
			<th>Contact</th>
			<th>Dob</th>
			<th>Father</th>
			<th>Caddress</th>
			<th>Paddress</th>
			<th>Instname</th>
			<th>City</th>
			<th>Pin</th>
			<th>Prog</th>
			<th>Year</th>
			<th>Email</th>
			<th>Url</th>
			<th>State</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$details = getAll("details");
				if($details) foreach ($details as $detailss):
					?>
					<tr>
		<td><?php echo $detailss['fname']?></td>
		<td><?php echo $detailss['lname']?></td>
		<td><?php echo $detailss['contact']?></td>
		<td><?php echo $detailss['dob']?></td>
		<td><?php echo $detailss['father']?></td>
		<td><?php echo $detailss['caddress']?></td>
		<td><?php echo $detailss['paddress']?></td>
		<td><?php echo $detailss['instname']?></td>
		<td><?php echo $detailss['city']?></td>
		<td><?php echo $detailss['pin']?></td>
		<td><?php echo $detailss['prog']?></td>
		<td><?php echo $detailss['year']?></td>
		<td><?php echo $detailss['email']?></td>
		<td><?php echo $detailss['url']?></td>
		<td><?php echo $detailss['state']?></td>


						<td><a href="edit-details.php?act=edit&id=<?php echo $detailss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $detailss['id']?>&cat=details" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				