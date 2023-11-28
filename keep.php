<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Blogs</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Author</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "./dbcon.php";
            $query = "SELECT * FROM add_blog";
            $result=mysqli_query($connection,$query);

            while($mac=mysqli_fetch_assoc($result)) {
                echo"<tr>"; 
                    echo"<td>" . $mac['title']."</td>";
                    echo"<td>" . $mac['description']."</td>";
                    echo"<td>" . $mac['author']."</td>";
            }
            ?>
            </tr>
        </tbody>
    </table>

    <div class="card" style="width: 400px; height: 17rem;">
        <?php
        require_once "./dbcon.php";
        $query = "SELECT * FROM add_blog";
        $result=mysqli_query($connection,$query);

        while($mac=mysqli_fetch_assoc($result)) {
            echo"<tr>"; 
                echo"<div>" . $mac['title']."</td>";
                echo"<td>" . $mac['description']."</td>";
                echo"<td>" . $mac['author']."</td>";
        }
        ?>
     

</body>
</html>