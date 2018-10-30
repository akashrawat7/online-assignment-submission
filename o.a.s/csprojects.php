 <?php 
session_start();


$con=mysqli_connect('localhost','root','','register');
if(isset($_SESSION['username'])){
	if($_SESSION['username']==true)
	{
//echo  $_SESSION['username'];
}

else{
	header('location:new.php');
}
}
?>
<?php

$con=mysqli_connect('localhost','root','','register');
if(isset($_POST['course'])){
$course=$_POST["course"];
$query=mysqli_query($con," SELECT * FROM uplode course='$course' ");
$rowcount= mysqli_num_rows($query);
	
 if (mysqli_num_rows($query)< 0)

for ($i=1; $i <=$rowcount; $i++) { 
	$row= mysqli_fetch_array($query);





}
 ?>
 <hr>

		<ul>
			<li></li>
		
		<li>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $row['text'];?> </li>
		<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submit porject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='uplode/<?php echo $row['file'] ?>'><?php echo $row['file'] ?></a></li>
		<li></li>
	</ul>

<?php } ?>