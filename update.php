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
            $ID = $_GET['id'];

        require_once'./dbcon.php';

        $query='SELECT * FROM add_blog WHERE id=?';
        $stmt=mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt,'i', $id);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $row=mysqli_fetch_assoc($result);
    ?>  
    <form action="./sec.php" method="post" style="margin-top: 5rem;">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"> 
        
        <input type="text" name="firstname"  value="<?php echo $first_name; ?>">
    <required><br>
    
        <input type="text" name="secondmane"  value="<?php echo $second_name; ?>">
    
    <br>
        <input type="text" name="phonenumber"  value="<?php echo $phonenumber; ?>">
    
    <br>
        <input type="text"  name="course"  value="<?php echo $course; ?>">
    <br>
        <input type="submit" value="Update">
    </form>
    <?php
        } else {
            echo "<p>No data found for the provided ID.</p>";
        }
         
    ?>
    

           
        

               
        
        
</body>
</html>