<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Blogs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="card" style="border: 2px bg-secondary; width: 17rem; " >
       
    
        <?php
        require_once "./dbcon.php";
        $query = "SELECT * FROM add_blog WHERE id=2";
        $result=mysqli_query($connection,$query);

        while($mac=mysqli_fetch_assoc($result)) {
            echo "<div class='card'>";
            echo"<div class='card-text'>"; 
                echo"<div class='card-title'>" . $mac['title']."</div>" ;
                echo"<card-body>" . $mac['description']."</card-body>";
                echo"<card-footer>" . $mac['author']."</card-footer>";
            echo "</div>";      
       
                }        ?>
    
        
    </div>
                                                                                                                                                                                                                                                           
</body>
</html>