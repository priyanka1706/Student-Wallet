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
/*$sql = "insert into Bud(Food) 
select Money 
from Exp
where Category='Food'"; 
*/

//$sql = "SELECT Money from Exp where Category='Food'";

$sql1="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as fd from Exp
where Category='Food'";
$sql2="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as st from Exp
where Category='Stationery'";
$sql3="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as bk from Exp
where Category='Books'";
$sql4="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as ac from Exp
where Category='Academic'";
$sql5="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as cl from Exp
where Category='Clothes'";
$sql6="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as tr from Exp
where Category='Travel'";
$sql7="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as ps from Exp
where Category='Personal'";
$sql8="insert into Budexp(Cat,Money) 
SELECT Category, sum(Money) as bd from Exp
where Category='Birthdays'";


if ($conn->query($sql1) === TRUE&&$conn->query($sql2) === TRUE&&$conn->query($sql3) === TRUE&&$conn->query($sql4) === TRUE&&$conn->query($sql5) === TRUE&&$conn->query($sql6) === TRUE&&$conn->query($sql7) === TRUE&&$conn->query($sql8) === TRUE) 
{
    //echo "Summed up food successfully!";
	//echo "<br>" . $row["Food"];
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>


</body>
</html>
