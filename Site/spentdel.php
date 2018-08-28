<html>
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
$sql = "DELETE FROM Budexp";

if ($conn->query($sql) === TRUE) 
{
    //echo "Record Deleted successfully";
} 
else 
{     echo "Error deleting record: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>

</body>
</html>