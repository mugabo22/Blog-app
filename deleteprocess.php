<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if(isset($_GET["id"]) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
        }
       
        require_once"./dbcon.php";

        $query="DELETE  FROM  add_blog WHERE id=?";
        $stmt=mysqli_prepare($connection,$query);
        mysqli_stmt_bind_param($stmt,"i",$id);
        $id=$_GET['id'];
        if( $stmt->execute()){
            // $stmt->close();
            // $mysqli->close();
        } else{
            die ('failed to delete');
        }

    ?>
</body>
</html>