
<?php 
 session_start();


 if(!isset($_SESSION['admin']))
 {

 	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
 	//echo $_SERVER['REQUEST_URI'];
	header("location:admin2.php");

 }

 ?>
<?php 
$con=mysqli_connect('localhost','root','','register');
$user= $_SESSION['admin'];

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

	<ul>
		  <li><a href="bca.php">BCA student projects</a></li>

		   <li><a href="bsc.php">BSC.IT student projects</a></li>
	
	<li><a href="bba.php">BBA student projects</a></li>
	<li><a href="bhm.php">BHM  students projects</a></li>


</ul>
<div class="home">
	<h1>welcome to admin panel</h1></div>

</body>
</html>

<div class=logout>
  <a href="logout.php"><input type="button" name="logout" value="logout"></a>


</div>
