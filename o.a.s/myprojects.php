
<?php 
 session_start();


 if(!isset($_SESSION['username']))
 {

 	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
 	//echo $_SERVER['REQUEST_URI'];
	header("location:login.php");

 }

 ?>

<a href="welcome2.php"><input type="button" name="back" value="Back"></a>
<h1>  Your Submit project list</h1>
 <?php 



$con=mysqli_connect('localhost','root','','register');
if(isset($_SESSION['username'])){
	if($_SESSION['username']==true)
	{
//echo  $_SESSION['username'];
}

else{
	header('location:welcome2.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page/online project submission</title>
	<style type="text/css">
		<style type="text/css">


ul { font-size:20px; margin-left:-10px; margin-right:-10px; margin: -1%; overflow: hidden; background-color:white; text-decoration: none;  list-style-type: none; }
   

 li {display: block;padding:8px;text-decoration:none; color:black;  text-decoration: none; font-size: 28px;  }
 
 
  li:nth-child(even){
 
background-color:powderblue ;

 }
 hr{
 	background-color:black;
 	height:10px;
 }
 
 input[type="button"]
 {
 	padding: 1% 3%;

background-color:black;
border-radius: 7px;
color:white;
 }

	</style>
</head>
<body>

<?php

$con=mysqli_connect('localhost','root','','register');
$user= $_SESSION['username'];

$query1=mysqli_query($con," SELECT * FROM signup WHERE username='$user'  ");
$row1= mysqli_fetch_array($query1);
$id=$row1['id'];

$query=mysqli_query($con," SELECT * FROM uplode WHERE userid='$id' ORDER BY id DESC");
$rowcount= mysqli_num_rows($query);

for ($i=1; $i <=$rowcount; $i++) { 
	$row= mysqli_fetch_array($query);

 ?>
 <hr>

		<ul>
			<li></li>
		
		<li>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $_SESSION['username'];?> </li>
		<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submit porject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='uplode/<?php echo $row['file'] ?>'><?php echo $row['file'] ?></a></li>
		
	</ul>

<?php } ?>


</body>
</html>