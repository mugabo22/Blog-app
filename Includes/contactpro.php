<?php

require_once "../dbcon.php";

$tam = "INSERT INTO contact (first_name,second_name,email,complaint) VALUES(?,?,?,?)";
$stmt= mysqli_prepare($connection,$tam);
if(!$stmt){
    die("Prepare Failed". mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "ssss",$first_name,$second_name,$email,$complaint);
$first_name=$_POST["first_name"];
$second_name=$_POST["second_name"];
$email=$_POST["email"];
$complaint=$_POST["complaint"];
if (mysqli_stmt_execute($stmt)) { 
    // echo "Created Sucessfully";
    header("Location:../contact.php");
} else {
    echo "Execute Failed". mysqli_error($connection);
}
mysqli_stmt_close($stmt);
mysqli_close($connection);


?>