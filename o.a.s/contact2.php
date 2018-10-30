
<?php
$con=mysqli_connect('localhost','root','','register');


if(isset($_POST["name"])){


$text=$_POST["name"];

$email=$_POST["email"];

$message=$_POST['message'];
$query=mysqli_query($con,"SELECT * FROM photos WHERE message='$message'");
  if (mysqli_num_rows($query)> 0) {
$_msg=  "  Oops..! error!!  Enter some anthor message!!!" ;
}
else{
$sql=mysqli_query($con,"INSERT INTO photos(image,text,message) values('$text','$email','$message')");

 if(!mysqli_query($con,$sql))
  
  {
$_sub=   "Good  work  !!!   your message is submit";
   }
else{
  echo "ssssss";
 
}
}
}


  ?>

 <script type="text/javascript">
    var valid="<?php  echo $_msg ?>";
    alert(valid);
  </script>

 <script type="text/javascript">
    var valid="<?php  echo $_sub ?>";
    alert(valid);
  </script>
