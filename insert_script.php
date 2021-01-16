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
    $filename = $_FILES["image"]["name"]; 
  	$tempname = $_FILES["image"]["tmp_name"];   
    $image = "image/".$filename;
	$sql = "INSERT INTO test_form (image, f_name, l_name, username, city, state, zip) VALUES ('$image','$fname','$lname','$uname','$city','$state','$zip')";

	if (move_uploaded_file($tempname, $image))
	{ 
      $msg = "Image uploaded successfully"; 
    }
    else
    { 
      $msg = "Failed to upload image"; 
  	}
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