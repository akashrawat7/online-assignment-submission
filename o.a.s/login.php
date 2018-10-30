
<?php
session_start();
if(isset($_post['submit'])){
	if($_post['password'] == $_pass){
		$_SESSION['username']== TRUE;
		header('loaction:'.$_SESSION['redirectURL']);
	}
	
}




?>
<?php
$con=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['submit']))
{
	$user=$_REQUEST['username'];
  $pass=md5($_REQUEST['password']);
  

  $query=mysqli_query($con,"SELECT * from signup where username='$user' && password='$pass' ");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
{
	$_SESSION['username']=$user;
	header('location:welcome2.php');
}
else
	$_loginerror= "  Oops...username or password was wrong! error" ;
}

   

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<ul>
	

	<li><a href="login.php">Login</a></li>
   
	<li><a href="register.php">Signup</a></li>
     <li><a href="admin2.php">Admin login</a></li>
	<li><a href="contact.php">Contact</a></li>

</ul>
<div class="first">
<h1>Online Project Submission</h1></div>
<h3><b>Build for everyone</b></h3>

<h2>
	<br> In this website everyone submit their assigenment.<br>
you can also see many type of project  according to your interest.<br>

 </h2>
	<div class="box">
	<form method="POST" action="login.php">
		<h2>login</h2>
		<label>USERNAME</label><br><br>
		<input type="text" name="username" placeholder="username" required="" autocomplete="off"><br><br>

		<label>PASSWORD</label><br><br>
		<input type="password" name="password" placeholder="password" required="" autocomplete="off"><br>
		
		<input type="submit" name="submit" value="login">
		<b><p> &nbsp; &nbsp;  Not a member? <a href="register.php"> signup</a></p></b><br>
	

	</form>

<script type="text/javascript">
		var valid="<?php  echo $_loginerror ?>";
		alert(valid);
	</script>


  
  </div>
</body>
</html>