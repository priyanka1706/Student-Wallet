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
$sql = "insert into Bud(Food,Stationery,Books,Acad,Clothes,Travel,Personal,Bday) values (1000,70,80,500,500,700,500,400)"; 

if ($conn->query($sql) === TRUE) 
{
    echo "Record Inserted into Bud successfully!";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>


</body>
</html>
