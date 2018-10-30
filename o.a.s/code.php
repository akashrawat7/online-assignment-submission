<?php 
$con=mysqli_connect('localhost','root','','register');
  if(isset($_POST['username']))
  {  $user=$_POST['username'];
 
$email =$_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_emailerror=  "Invalid email format"; 

}
      else{
  $pass=$_POST['password'];
  $pass=md5($pass);
  $query=mysqli_query($con,"SELECT * FROM signup WHERE email='$email'");
  if (mysqli_num_rows($query)> 0) {
    $_signuperror= "  Oops..! error!!  this email is already exists please enter new email to signup!" ;
}
  
  else{

  $sql="INSERT into signup( username, email, password) values('$user','$email','$pass')";
     if(!mysqli_query($con,$sql))
  
  {
   	$_notinsert= 'data not  insert';
   }
else{
	$_insert= "great work  !!!     data insert";
 

}

}

}
}
 ?>

  