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
else
{
$sql = "UPDATE Bud SET Clothes=1000 WHERE Food='1000'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully <br>";
} else {
    echo "Error updating record: " . $conn->error;
}
}


/*
$sql = "SELECT Name,Regno,Gpa,Mail from Persons1043";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     echo "Name Regno Gpa Mail ";
     while($row = $result->fetch_assoc()) {
         echo "<br>" . $row["Name"]. " " . $row["Regno"]. " " . $row["Gpa"]. " " . $row["Mail"];
     }
} else {
     echo "0 results";
}*/
$conn->close();


?>


</body>
</html>