<?php

include 'connect.php';

if(isset($_POST))
{
	$id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $filename = $_FILES["image"]["name"]; 
  	$tempname = $_FILES["image"]["tmp_name"];   
    $image = "image/".$filename;

	$sql = "UPDATE test_form SET 
							image = '$image',
							 f_name = '$fname',
							 l_name = '$lname',
							 username = '$uname',
							 city = '$city',
							 state = '$state',
							 zip = '$zip'
						WHERE id = '$id'";

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
		$_SESSION['success'] ="Data Udpated Successfully";
    	header('Location: index.php?success');
	}

	else 
	{
	echo "not inserted";
	}
}
?>