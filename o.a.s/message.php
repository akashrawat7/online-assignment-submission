


<a href="contact.php"><input type="button" name="back" value="Back"></a>

<h1><center> See contact us messages</center></h1>


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


ul { font-size:20px; margin-left:-10px; margin-right:-10px; margin: -1%; overflow: hidden; background-color:white; text-decoration: none;  list-style-type: none; }
   

 li {display: block;padding:8px;text-decoration:none; color:black;  text-decoration: none; font-size: 28px;  }
 
 
  li:nth-child(even){
 
background-color: powderblue;

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

<div class="details">

<?php

$con=mysqli_connect('localhost','root','','register');
$query=mysqli_query($con," SELECT * FROM photos ORDER BY id DESC");
$rowcount= mysqli_num_rows($query);

for ($i=1; $i <=$rowcount; $i++) { 
	$row= mysqli_fetch_array($query);


 ?>
 <hr>
		<ul>
			<li><font color="blue"><u><?php echo $row['image'] ?></u> Send a message </font></li>
		
		<li>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>email:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['text'] ?> </li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>message:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['message'] ?></li>
	</ul></div>


<?php } ?>
</table>
</body>
</html>