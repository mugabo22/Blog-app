<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
         $enteredUsername = $_POST['username'];
         $enteredPassword = $_POST['password'];
     
     
         $hashedPassword = password_hash($enteredPassword, PASSWORD_DEFAULT);
     
     
         $sql = "INSERT INTO users (username, password) VALUES ('$enteredUsername', '$hashedPassword')";
     
         if ($conn->query($sql) === TRUE) {
             echo "User registered successfully!";
         } else {
             echo "Error: " . $sql . "<br>" . $connection->error;
         }
    ?>

   
</body>
</html>