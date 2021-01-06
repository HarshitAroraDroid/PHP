<?php

include 'connect.php';

if(isset($_POST))
{
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $uname = mysqli_real_escape_string($con,$_POST['uname']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $state = mysqli_real_escape_string($con,$_POST['state']);
    $zip = mysqli_real_escape_string($con,$_POST['zip']);
	$sql = "INSERT INTO test_form (f_name, l_name, username, city, state, zip) VALUES ('$fname','$lname','$uname','$city','$state','$zip')";

	if (mysqli_query($con, $sql))
	{
		$_SESSION['success'] ="Data Inserted Successfully";
	    header('Location: index.php?success');
	}
	else 
	{
		echo "not inserted";
	}
}
?>