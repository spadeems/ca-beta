<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$register = getById("register", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Register</legend>
						<input name="cat" type="hidden" value="register">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="Name" value="<?=$register['Name']?>" /><br>
							
							<label>Contact</label>
							<input class="form-control" type="text" name="Contact" value="<?=$register['Contact']?>" /><br>
							
							<label>InstituteName</label>
							<input class="form-control" type="text" name="InstituteName" value="<?=$register['InstituteName']?>" /><br>
							
							<label>InstAddress</label>
							<input class="form-control" type="text" name="InstAddress" value="<?=$register['InstAddress']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="Email" value="<?=$register['Email']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="Password" value="<?=$register['Password']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				