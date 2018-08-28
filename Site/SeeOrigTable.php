<html>
<head>
	<title>Progress</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
	<style type="text/css">
	.percentage {
  background: repeating-linear-gradient(
    to right,
    #ddd,
    #ddd 1px,
    #fff 1px,
    #fff 5%
  );
}
</style>
</head>

<body>
	<section class="intro" id="zen-intro">
		<header role="banner">
		</header>
	</section>

	<div class="preamble" id="zen-preamble" role="article">
	<h3><b>Here's What you've spent on so far</b></h3>

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

$sql = "SELECT Money,Area,Category,Details from Exp";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	 echo "<table>";
     echo "<tr><td><b>Money</b></td><td><b>Area</b></td><td><b>Category</b></td><td><b>Details</b></td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["Money"]. "</td><td>" . $row["Area"]. "</td><td>" . $row["Category"]. "</td><td>" . $row["Details"]. "</td></tr> ";
	 }
	 echo "</table>";
} else {
     echo "0 results";
}
$conn->close();


?>
<br><p>We hope this helped!</p><br>
	
	<a href="Welcome.htm"><div style="margin:90px 90px 100px 90px">
		<h5 align=center>Back to Home</h5></div>
		</a>
		
<br>
			
			<p role="contentinfo" style="text-align: center;">Join Us on <br>
		<a href="https://www.facebook.com/studentwallet"><img id="facebook" border="0" alt="Facebook" src="facebook.png" height="32px" width="32px"></a>
		<a href="https://www.twitter.com/studentwallet"><img id="twitter" border="0" alt="Twitter" src="twitter.png" height="32px" width="32px"></a>
		<br>Student Wallet 2016. All Rights Reserved.
		</p>
			<footer></footer>


</body>
</html>