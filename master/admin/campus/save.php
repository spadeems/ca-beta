<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "details" || $cat_get == "details"){
					$fname = mysqli_real_escape_string($link,$_POST["fname"]);
$lname = mysqli_real_escape_string($link,$_POST["lname"]);
$contact = mysqli_real_escape_string($link,$_POST["contact"]);
$dob = mysqli_real_escape_string($link,$_POST["dob"]);
$father = mysqli_real_escape_string($link,$_POST["father"]);
$caddress = mysqli_real_escape_string($link,$_POST["caddress"]);
$paddress = mysqli_real_escape_string($link,$_POST["paddress"]);
$instname = mysqli_real_escape_string($link,$_POST["instname"]);
$city = mysqli_real_escape_string($link,$_POST["city"]);
$pin = mysqli_real_escape_string($link,$_POST["pin"]);
$prog = mysqli_real_escape_string($link,$_POST["prog"]);
$year = mysqli_real_escape_string($link,$_POST["year"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$url = mysqli_real_escape_string($link,$_POST["url"]);
$state = mysqli_real_escape_string($link,$_POST["state"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `details` (  `fname` , `lname` , `contact` , `dob` , `father` , `caddress` , `paddress` , `instname` , `city` , `pin` , `prog` , `year` , `email` , `url` , `state` ) VALUES ( '".$fname."' , '".$lname."' , '".$contact."' , '".$dob."' , '".$father."' , '".$caddress."' , '".$paddress."' , '".$instname."' , '".$city."' , '".$pin."' , '".$prog."' , '".$year."' , '".$email."' , '".$url."' , '".$state."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `details` SET  `fname` =  '".$fname."' , `lname` =  '".$lname."' , `contact` =  '".$contact."' , `dob` =  '".$dob."' , `father` =  '".$father."' , `caddress` =  '".$caddress."' , `paddress` =  '".$paddress."' , `instname` =  '".$instname."' , `city` =  '".$city."' , `pin` =  '".$pin."' , `prog` =  '".$prog."' , `year` =  '".$year."' , `email` =  '".$email."' , `url` =  '".$url."' , `state` =  '".$state."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `details` WHERE id = '".$id_get."' ");
					}
					header("location:"."details.php");
				}
				
				if($cat == "register" || $cat_get == "register"){
					$Name = mysqli_real_escape_string($link,$_POST["Name"]);
$Contact = mysqli_real_escape_string($link,$_POST["Contact"]);
$InstituteName = mysqli_real_escape_string($link,$_POST["InstituteName"]);
$InstAddress = mysqli_real_escape_string($link,$_POST["InstAddress"]);
$Email = mysqli_real_escape_string($link,$_POST["Email"]);
$Password = mysqli_real_escape_string($link,$_POST["Password"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `register` (  `Name` , `Contact` , `InstituteName` , `InstAddress` , `Email` , `Password` ) VALUES ( '".$Name."' , '".$Contact."' , '".$InstituteName."' , '".$InstAddress."' , '".$Email."' , '".$Password."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `register` SET  `Name` =  '".$Name."' , `Contact` =  '".$Contact."' , `InstituteName` =  '".$InstituteName."' , `InstAddress` =  '".$InstAddress."' , `Email` =  '".$Email."' , `Password` =  '".$Password."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `register` WHERE id = '".$id_get."' ");
					}
					header("location:"."register.php");
				}
				
				if($cat == "users" || $cat_get == "users"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$password = mysqli_real_escape_string($link,$_POST["password"]);
$role = mysqli_real_escape_string($link,$_POST["role"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>