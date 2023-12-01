<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST-METHOD"]=="POST");
        $id=$_POST['id'];
        $title=$_POST["title"];
        $description=$_POST["description"];
        $author=$_POST['author'];

        require_once "./dbcon.php";

        $query="UPDATE add_blog SET title=?,description=?,author=? WHERE id=?";
        $stmt=mysqli_prepare($connection,$query);
        mysqli_stmt_bind_param($stmt,"sssi", $id, $title, $description,$author);
        mysqli_stmt_execute($stmt);
        // echo"Update was successful";
        header("Location:./");

    ?>
</body>
</html>