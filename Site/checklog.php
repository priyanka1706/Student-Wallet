<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
	<section class="intro" id="zen-intro">
		<header role="banner">
		</header>
	</section>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PriyankaStudentDB";
$db = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "SELECT * FROM Users WHERE Uname = '$myusername' and Pwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("uname");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Welcome.htm");
      }else {
         echo "<h4>Your Login Name or Password is invalid.<br>Please go back and try again</h4>";
      }
   }
$db->close();
?>
			<br>
			<p role="contentinfo" style="text-align: center;">Join Us on <br>
		<a href="https://www.facebook.com/studentwallet"><img id="facebook" border="0" alt="Facebook" src="facebook.png" height="32px" width="32px"></a>
		<a href="https://www.twitter.com/studentwallet"><img id="twitter" border="0" alt="Twitter" src="twitter.png" height="32px" width="32px"></a>
		<br>Student Wallet 2016. All Rights Reserved.
		</p>
			<footer></footer>

</body>
</html>