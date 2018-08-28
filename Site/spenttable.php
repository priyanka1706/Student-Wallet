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
$sql = "CREATE TABLE Budexp
(
Cat varchar(20),
Money int
)"; 

if ($conn->query($sql) === TRUE) {
    echo "Table Budexp created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?> 

</body>
</html>
