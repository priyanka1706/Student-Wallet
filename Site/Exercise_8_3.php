<html>
<head>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PriyankaStudentDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "insert into Exp(Money,Area,Category,Details) values (500, 'mall','shopping', 'monthly shopping')"; 

if ($conn->query($sql) === TRUE) 
{
    echo "Record Inserted successfully";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>


</body>
</html>
