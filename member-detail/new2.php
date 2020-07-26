<?php
session_start();
$con=mysqli_connect('mysql.spadeems.org','techbizotech1','vishal2000','campusammb');
$q1="SELECT *  FROM `details`";
	$r1= mysqli_query($con,$q1);
	while($row=mysqli_fetch_assoc($r1))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		echo '<h4>'.$fname.'</h4>';
		echo '<h4>'.$lname.'</h4>';
		echo '<h3>Registered Successfully</h3>';
		echo '<hr>';
	}
	
?>