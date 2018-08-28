<html>
<head>
	<title>Well Done</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
	<section class="intro" id="zen-intro">
		<header role="banner">
		</header>
	</section>

	<div class="preamble" id="zen-preamble" role="article">
	<h3><b>Well Done!</b></h3>
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
$sql = "insert into Bud(Food,Stationery,Books,Acad,Clothes,Travel,Personal,Bday) values ('$_POST[food]', '$_POST[stationery]', '$_POST[books]', '$_POST[academic]', '$_POST[clothes]', '$_POST[travel]', '$_POST[personal]', '$_POST[birthdays]')"; 
//$sql = "insert into Exp(Money,Area,Category,Details) values (60, 'vmart','Food', 'chips')"; 

if ($conn->query($sql) === TRUE) 
{
    echo "<h4>Record Inserted successfully into Budget!</h4>";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>
	<p>You're now one step closer to a future of savings! Way to go!<br>We hope you get to earn a lot of badges, like these:</p><br>


	<img src="day.png" width="200" height="200" border="2"><img src="week.png" width="200" height="200" border="2"><img src="ba.png" width="200" height="200" border="2">
	<br>
	
	<a href="Welcome.htm"><div style="margin:90px 90px 100px 90px">
		<h5 align=center>Back To Home</h5></div>
		</a>

			
			<p role="contentinfo" style="text-align: center;">Join Us on <br>
		<a href="https://www.facebook.com/studentwallet"><img id="facebook" border="0" alt="Facebook" src="facebook.png" height="32px" width="32px"></a>
		<a href="https://www.twitter.com/studentwallet"><img id="twitter" border="0" alt="Twitter" src="twitter.png" height="32px" width="32px"></a>
		<br>Student Wallet 2016. All Rights Reserved.
		</p>
			<footer></footer>

</body>
</html>