<html>
<head>
	<title>User Details</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>

<body>
	<section class="intro" id="zen-intro">
		<header role="banner">
		</header>
	</section>

	<div class="preamble" id="zen-preamble" role="article">
	<h3><b>Users registered so far</b></h3>

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
/*else
{
$sql = "UPDATE Exp SET Name='Jane' WHERE Regno='15BCE1143'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully <br>";
} else {
    echo "Error updating record: " . $conn->error;
}
}
*/

$sql = "SELECT Uname, Pwd, Name, Dob, Email from Users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	 echo "<table>";
     echo "<tr><td><b>Username</b></td><td><b>Password</b></td><td><b>Name</b></td><td><b>Date of birth</b></td><td><b>Email</b></td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["Uname"]. "</td><td>" . $row["Pwd"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Dob"]. "</td><td>" . $row["Email"]. "</td></tr> ";
	 }
	 echo "</table>";
} else {
     echo "0 results";
}
$conn->close();


?>
<br><p>We hope this helped!</p><br>
	
	<a href="SWHome.htm"><div style="margin:90px 90px 100px 90px">
		<h5 align=center>Back to Home</h5></div>
		</a>

			
			<p role="contentinfo" style="text-align: center;">Join Us on <br>
		<a href="https://www.facebook.com/studentwallet"><img id="facebook" border="0" alt="Facebook" src="facebook.png" height="32px" width="32px"></a>
		<a href="https://www.twitter.com/studentwallet"><img id="twitter" border="0" alt="Twitter" src="twitter.png" height="32px" width="32px"></a>
		<br>Student Wallet 2016. All Rights Reserved.
		</p>
			<footer></footer>


</body>
</html>