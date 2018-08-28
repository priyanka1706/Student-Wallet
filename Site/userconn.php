<html>
<head>
	<title>Welcome!</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
	<section class="intro" id="zen-intro">
		<header role="banner">
		</header>
	</section>

	<div class="preamble" id="zen-preamble" role="article">
	<h3><b>Hey there, new user!</b></h3>
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
$sql = "insert into Users(Uname, Pwd, Name, Dob, Email) values ('$_POST[uname]', '$_POST[pwd]', '$_POST[name]', '$_POST[dob]', '$_POST[email]')"; 
//$sql = "insert into Users(Uname, Pwd, Name, Dob, Email) values ('priyanka1706','swallet','Priyanka C', '17/06/1997', 'priyankachandrashekhar@yahoo.in')"; 

if ($conn->query($sql) === TRUE) 
{
    echo "<h4>Sign Up Successful!</h4>";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>
	<p>Welcome to the Student Wallet family!<br></p><br>
	
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