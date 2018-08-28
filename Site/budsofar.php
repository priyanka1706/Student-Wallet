<html>
<head>
	<title>Progress-Budget</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>

<body>
	<section class="intro" id="zen-intro">
		<header role="banner">
		</header>
	</section>

	<div class="preamble" id="zen-preamble" role="article">
	<h3><b>You may now spend</b></h3>

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

$sql = "SELECT Food,Stationery,Books,Acad,Clothes,Travel,Personal,Bday from Bud";
$sqlexp = "SELECT Cat,Money from Budexp";

$result = $conn->query($sql);
$resultexp = $conn->query($sqlexp);

//$rowexp = $resultexp->fetch_assoc();
$count=1;
$fd=0;
$st=0;
$bk=0;
$ac=0;
$cl=0;
$tr=0;
$ps=0;
$bd=0;

if ($result->num_rows > 0) {
     // output data of each row
	 echo "<table>";
     echo "<tr><td><b>Food</b></td><td><b>Stationery</b></td><td><b>Books</b></td><td><b>Academics</b></td><td><b>Clothes</b></td><td><b>Travel</b></td><td><b>Personal Necc</b></td><td><b>Birthdays</b></td></tr>";
     while($row = $result->fetch_assoc()) {
		 while($rowexp = $resultexp->fetch_assoc()) {
			if ($count==1)
				$fd=$row["Food"]-$rowexp["Money"];
			if ($count==2)
				$st=$row["Stationery"]-$rowexp["Money"];
			if ($count==3)
				$bk=$row["Books"]-$rowexp["Money"];
			if ($count==4)
				$ac=$row["Acad"]-$rowexp["Money"];
			if ($count==5)
				$cl=$row["Clothes"]-$rowexp["Money"];
			if ($count==6)
				$tr=$row["Travel"]-$rowexp["Money"];
			if ($count==7)
				$ps=$row["Personal"]-$rowexp["Money"];
			if ($count==8)
				$bd=$row["Bday"]-$rowexp["Money"];
			$count=$count+1;
         }
		 echo "<tr><td>" . $fd . "</td><td>" . $st . "</td><td>" . $bk . "</td><td>" . $ac . "</td><td>" . $cl. "</td><td>" . $tr. "</td><td>" . $ps.  "</td><td>" . $bd. "</td></tr> ";
	 }
	 echo "</table>";
} else {
     echo "0 results";
}

if ($fd>100&&$st>100&&$bk>100&&$ac>100&&$cl>100&&$tr>100&&$ps>100&&$bd>100)
{
	echo "<br> You're doing well with your Budget! Way to go!";
}
else
{
	echo "<br> Seems like you need to work on a few areas!<br> Try keeping a check on";
	if ($fd<=100)
		echo " Food,";
	if ($st<=100)
		echo " Stationery,";
	if ($bk<=100)
		echo " Books,";
	if ($ac<=100)
		echo " Acad,";
	if ($cl<=100)
		echo " Clothes,";
	if ($tr<=100)
		echo " Travel,";
	if ($ps<=100)
		echo " Personal,";
	if ($bd<=100)
		echo " Bday,";
	echo " !";
}	

$conn->close();


?>
<br><br><p>We hope this helped!</p><br>
	
	<a href="Welcome.htm"><div style="margin:90px 90px 100px 90px">
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