<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        
        $usersername = $_POST['username'];
        $password = $_POST['password'];

        require_once"./dbcon.php";

        $sql = "SELECT * FROM user_passwords WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

        if (password_verify($enteredPassword, $hashedPassword)) {
            // Authentication successful
            echo "Login successful!";
        } else {
            // Invalid password
            echo "Invalid password!";
        }
    } else {
        // User not found
        echo "User not found!";
    }
        ?>
</body>
</html>