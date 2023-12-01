<?php

require_once "./dbcon.php";

$mac = "UPDATE students SET  firstname='$first_name',secondname='$second_name',phonenumber=$phonenumber,course='$course' WHERE id=?";
$stmt= mysqli_prepare($connection,$mac);
if(!$stmt){
    die("Prepare Failed". mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "ssss",$first_name,$second_name,$phonenumber,$course);
$first_name=$_POST["firstname"];
$second_name=$_POST["secondname"];
$phonenumber=$_POST["phonenumber"];
$course=$_POST["course"];
if (mysqli_stmt_execute($stmt)) {
    echo "successful";
    // header("Location:./delete.php");
} else {
    echo "Execute Failed". mysqli_error($connection);
}
mysqli_stmt_close($stmt);
mysqli_close($connection);


?>
