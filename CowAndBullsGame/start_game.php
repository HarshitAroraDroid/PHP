<?php

include 'connect.php';

if(isset($_POST))
{
    $name = $_POST["name"];
    // $sql = "INSERT into game (name) VALUES ('$name')";
    header("Location: index2.php?name=$name");

    // if(mysqli_query($con,$sql))
    // {
    //     $last_id = mysqli_insert_id($con);
    //     header("Location: index2.php?id=$last_id");
    // }
}





?>