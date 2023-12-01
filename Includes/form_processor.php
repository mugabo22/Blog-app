<?php

require_once "../dbcon.php";

$mac = "INSERT INTO add_blog (title,description,author) VALUES(?,?,?)";
$stmt= mysqli_prepare($connection,$mac);
if(!$stmt){
    die("Prepare Failed". mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "sss",$title,$description,$author);
$title=$_POST["title"];
$description=$_POST["description"];
$author=$_POST["author"];
if (mysqli_stmt_execute($stmt)) {   
    header("Location:../add.php");
} else {
    echo "Execute Failed". mysqli_error($connection);
}
mysqli_stmt_close($stmt);
mysqli_close($connection);


?>