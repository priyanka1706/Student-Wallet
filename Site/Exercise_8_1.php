<html>
<head>
</head>

<body>
<?php
// Create connection
$conn = new mysqli("localhost", "root","");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE PriyankaStudentDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
</body>
</html>