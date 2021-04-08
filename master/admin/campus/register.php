<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-register.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Register</a>

				<h1>Register</h1>
				<p>This table includes <?php echo counting("register", "id");?> register.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Name</th>
			<th>Contact</th>
			<th>InstituteName</th>
			<th>InstAddress</th>
			<th>Email</th>
			<th>Password</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$register = getAll("register");
				if($register) foreach ($register as $registers):
					?>
					<tr>
		<td><?php echo $registers['Name']?></td>
		<td><?php echo $registers['Contact']?></td>
		<td><?php echo $registers['InstituteName']?></td>
		<td><?php echo $registers['InstAddress']?></td>
		<td><?php echo $registers['Email']?></td>
		<td><?php echo $registers['Password']?></td>


						<td><a href="edit-register.php?act=edit&id=<?php echo $registers['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $registers['id']?>&cat=register" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				