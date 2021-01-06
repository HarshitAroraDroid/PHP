<?php 
	include 'connect.php';
	$id = $_GET['id'];
    $sql = "DELETE from test_form WHERE id=$id";
    if (mysqli_query($con, $sql))
    {
    	$_SESSION['success'] ="Data Deleted Successfully";
    	header('Location: index.php?success');
	}

	echo $id;

 ?>
