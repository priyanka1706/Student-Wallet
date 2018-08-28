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
$sql = "insert into Users(Uname, Pwd, Name, Dob, Email) values ('priyanka1706','swallet','Priyanka C', '17/06/1997', 'priyankachandrashekhar@yahoo.in')"; 

if ($conn->query($sql) === TRUE) 
{
    echo "Record Inserted into Users successfully!";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>


</body>
</html>
