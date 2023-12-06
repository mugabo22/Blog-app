<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        
    ?>
   <table class="table table-dark  table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">author</th>
                <th scope="col">image</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                require_once "./dbcon.php";
                $query = "SELECT * FROM add_blog";
                $result=mysqli_query($connection,$query);
                $imageURL = $_FILES['image'][''];
                if (!$result){
                    die("Querry Failed".mysqli_error($connection));
                } else{
                    while($row=mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["title"]."</td>";
                        echo "<td>".$row["description"]."</td>";
                        echo "<td>".$row["author"]."</td>";
                        echo "<td><img src=\"$imageURL\"></td>";
                        
                        echo "<td>".'<a href="update.php?id=' . $row['id'] . '" class="btn btn-info">Update</a>';
                        "</td>";
                        echo "<td>";
                        echo '<a href="deleteprocess.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
                        "</td>";
                        echo"</tr>";
                    }
                }
            ?>
        </tbody>
   </table>
</body>
</html>
   