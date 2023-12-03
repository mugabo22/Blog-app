<?php
    require_once"./dbcon.php";

    if (isset($_POST["submit"])) {
        // $id=$_POST['id'];
        $first_name=$_POST ['firstname'];
        $second_name=$_POST['secondname'];
        $file_name = $_FILES["image"]["name"];
        $tempname=$_FILES["image"]["tmp_name"];
        $folder="Imagess/". $file_name;

        $query=mysqli_query($connection,"Insert into images (firstname,secondname,image) values('$first_name','$second_name','$file_name')");

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
    <form  method="POST" enctype="multipart/form-data" >
        <div>
            <label for="">First Name:</label>
            <input type="text" name="firstname">
        </div>
        <br/>
        <div>
            <label for="">Second Name:</label>
            <input type="text" name="secondname">
        </div>
        <input type="file" name="image" value="avatar">
    <br/><br/>
        <button type="submit" name="submit"  >Submit</button>
    </form>
    <div>
        <?php
            $res=mysqli_query($connection, "select * from images  ");
            while ($row=mysqli_fetch_assoc($res)) {

        ?>
        <div>
            <img src="Imagess/<?php echo $row['image'] ?>" alt="..." style="width:12rem;height:128px">
       </div>
        
    </div>
</body>
</html>