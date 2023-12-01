<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id'];
        
        require_once"./dbcon.php";
       

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query="INSERT INTO users_passwords (username,password) VALUES(?,?)";
        $stmt=mysqli_prepare($connection,$query);
        mysqli_stmt_bind_param($stmt,"ss",$username,$password);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $mac=password_hash($username,$PASSWORD_DEFAULT);

        if ($connection->query($query) === TRUE) {
            echo "User registered successfully!";
        } else {
            echo "Error: " . $sql . "<br>" .($connection->error);
        }



    
    ?>
</body>
</html>