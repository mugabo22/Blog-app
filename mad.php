<?php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "SELECT * FROM cards";
$result = $conn->query($sql);
?>
<?php
while($row = $result->fetch_assoc()) {
    echo '<div class="card">';
    echo '<img src="' . $row['image_url'] . '" alt="Card Image">';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['description'] . '</p>';
    echo'</div>';
}
?>