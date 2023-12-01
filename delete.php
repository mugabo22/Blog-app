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
                <th scope="col">firstname</th>
                <th scope="col">secondname</th>
                <th scope="col">phonenumber</th>
                <th scope="col">course</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                require_once "./dbcon.php";
                $query = "SELECT * FROM students";
                $result=mysqli_query($connection,$query);
                if (!$result){
                    die("Querry Failed".mysqli_error($connection));
                } else{
                    while($row=mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["firstname"]."</td>";
                        echo "<td>".$row["secondname"]."</td>";
                        echo "<td>".$row["phonenumber"]."</td>";
                        echo "<td>".$row["course"]."</td>";
                        
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
   