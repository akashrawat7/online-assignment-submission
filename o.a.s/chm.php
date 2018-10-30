<?php 
 session_start();


 if(!isset($_SESSION['admin']))
 {

 	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
 	//echo $_SERVER['REQUEST_URI'];
	header("location:admin2.php");

 }

 ?>



<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style type="text/css">
		body{
	  background-size: cover;
background-color: powderblue;
    background-attachment: fixed;


	}

ul { font-size:20px; margin-left:-10px; margin-right:-10px; margin: -1%; overflow: hidden; background-color:black;
  
 text-decoration: none;  list-style-type: none; }
   
 ul li {  float:left;} 
 ul li  {display: block;margin:2px 10px; text-decoration:none; color:white;  text-decoration: none; }
  
 ul li a {display: block;padding:20px;text-decoration:none; color:white;  text-decoration: none; }
 ul li a:hover{ display:block; background:lightslategray;}
 ul li:nth-child(1){
  margin-left:1%;}
 




ol { font-size:20px; margin-left:-10px; margin-right:-10px; margin: -1%; overflow: hidden; background-color:white; text-decoration: none;  list-style-type: none; }
   

  ol li { display: block;padding:8px;text-decoration:none; color:black;  text-decoration: none; font-size: 28px;  }
 
 
 ol li:nth-child(even){
 
background-color:  powderblue;

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
	<ul><li><a href="welcomeadmin.php">Home</a></li>
		  
		  <li><a href="bca.php">BCA student projects</a></li>
	<li><a href="bba.php">BBA student projects</a></li>
	<li><a href="bhm.php">BHM  students projects</a></li>
     <li><a href="chm.php">CHM students projects</a></li>

</ul>
<br><br>
<div class="details">

<?php

$con=mysqli_connect('localhost','root','','register');
$query=mysqli_query($con," SELECT * FROM uplode where course like 'BSC%'");
$rowcount= mysqli_num_rows($query);

for ($i=1; $i <=$rowcount; $i++) { 
	$row= mysqli_fetch_array($query);


 ?>

		<ol>
			<li><font color="blue"><u><?php echo $row['text'] ?></u> update new project</font></li>
		
		<li>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Student name:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['text'] ?> </li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Course Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['course'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>semester:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['sem'] ?></li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submit project:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='uplode/<?php echo $row['file'] ?>'><?php echo $row['file'] ?></a></li>
		<li></li>
	</0l></div>
<hr>

<?php } ?>
</table>
</body>
</html>