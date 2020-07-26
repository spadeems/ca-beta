<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$details = getById("details", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Details</legend>
						<input name="cat" type="hidden" value="details">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Fname</label>
							<input class="form-control" type="text" name="fname" value="<?=$details['fname']?>" /><br>
							
							<label>Lname</label>
							<input class="form-control" type="text" name="lname" value="<?=$details['lname']?>" /><br>
							
							<label>Contact</label>
							<input class="form-control" type="text" name="contact" value="<?=$details['contact']?>" /><br>
							
							<label>Dob</label>
							<input class="form-control" type="text" name="dob" value="<?=$details['dob']?>" /><br>
							
							<label>Father</label>
							<input class="form-control" type="text" name="father" value="<?=$details['father']?>" /><br>
							
							<label>Caddress</label>
							<input class="form-control" type="text" name="caddress" value="<?=$details['caddress']?>" /><br>
							
							<label>Paddress</label>
							<input class="form-control" type="text" name="paddress" value="<?=$details['paddress']?>" /><br>
							
							<label>Instname</label>
							<input class="form-control" type="text" name="instname" value="<?=$details['instname']?>" /><br>
							
							<label>City</label>
							<input class="form-control" type="text" name="city" value="<?=$details['city']?>" /><br>
							
							<label>Pin</label>
							<input class="form-control" type="text" name="pin" value="<?=$details['pin']?>" /><br>
							
							<label>Prog</label>
							<input class="form-control" type="text" name="prog" value="<?=$details['prog']?>" /><br>
							
							<label>Year</label>
							<input class="form-control" type="text" name="year" value="<?=$details['year']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$details['email']?>" /><br>
							
							<label>Url</label>
							<input class="form-control" type="text" name="url" value="<?=$details['url']?>" /><br>
							
							<label>State</label>
							<input class="form-control" type="text" name="state" value="<?=$details['state']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				