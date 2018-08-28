<html>
<head>
</head>
<body>
<?php
// Create connection
$conn = new mysqli("localhost", "root","");
mysqli_select_db($conn, 'PriyankaStudentDB');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE Users
(
Uname varchar(20),
Pwd varchar(20),
Name varchar(30),
Dob varchar(12),
Email varchar(40)
)"; 

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?> 

</body>
</html>
