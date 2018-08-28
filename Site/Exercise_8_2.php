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
$sql = "CREATE TABLE Exp
(
Money int,
Area varchar(10),
Category varchar(15),
Details varchar(20)
)"; 

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?> 

</body>
</html>
