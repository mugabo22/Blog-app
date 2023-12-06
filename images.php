
<?php
    require_once"./dbcon.php";

    if (isset($_POST["submit"])) {
        
        $Timage = $_FILES["image"]["name"];
        $tempname=$_FILES["image"]["tmp_name"];
        $folder="Imagess". $Timage;

        $query="INSERT  INTO myimages (image) VALUES('$Timage')";

        if (move_uploaded_file($tempname, $folder)) {
            echo"Uploaded successfully";
        }else{
            echo "Not Uploaded";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" enctype="multipart/form-data" >
        <input type="image" name="image">
        <input type="submit" name="submit" >
    </form>

    <!-- <?php
        // require_once"./dbcon.php";
        
        // $query="SELECT * FROM images";
        // $stmt=mysqli_prepare($connection, $query);
        // mysqli_stmt_bind_param($stmt,"s", $file_name);
        // $file_name=$_POST['file'];
        // if (mysqli_stmt_execute($stmt)){
        //     echo "Successfully";
        // }else{
        //     echo "Failed". mysqli_error($connection);
        // }
        // $stmt->close(); -->


    ?>
    <!-- <img src="Images/<?php echo $row['file'] ?>" alt=""> -->
</body>
</html>