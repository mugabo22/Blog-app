
<?php
    require_once"./dbcon.php";

    if (isset($_POST["submit"])) {
        
        $file_name = $_FILES["image"]["name"];
        $tempname=$_FILES["image"]["tmp_name"];
        $folder="Imagess". $file_name;

        $query="INSERT  INTO images (file) VALUES('$file')";

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
    <form action="" method="post" enctype="multipart/form-data" >
        <input type="file" name="file">
        <input type="submit" name="submit" accept="" >
    </form>

    <?php
        require_once"./dbcon.php";
        
        $query="SELECT * FROM images";
        $stmt=mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt,"s", $file_name);
        $file_name=$_POST['file'];
        if (mysqli_stmt_execute($stmt)){
            echo "Successfully";
        }else{
            echo "Failed". mysqli_error($connection);
        }
        $stmt->close();


    ?>
    <img src="Images/<?php echo $row['file'] ?>" alt="">
</body>
</html>