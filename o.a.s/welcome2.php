<?php 
 session_start();


 if(!isset($_SESSION['username']))
 {

  $_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
  //echo $_SERVER['REQUEST_URI'];
  header("location:login.php");

 }

 ?>

<?php
$con=mysqli_connect('localhost','root','','register');
$user= $_SESSION['username'];

$query=mysqli_query($con," SELECT * FROM signup WHERE username='$user' ");
$row= mysqli_fetch_array($query);
$id=$row['id'];



if(isset($_REQUEST["submit"])){

$file=$_FILES["file"]["name"];
$text=$_POST["text"];
$course=$_POST["course"];
$sem=$_POST["sem"];
$email=$_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_emailerror=  "Invalid email format !!!!   please enter the valid email format"; 

}else{
$tmp_name=$_FILES["file"]["tmp_name"];
$path="uplode/".$file;
$file1=explode(".", $file);
$ext=$file1[1];
$allowed=array("jpg","png","gif","pdf","wmv","html","css","php","txt","zip","docx","pptx","xlsx");
if (in_array($ext, $allowed)) 
{
move_uploaded_file($tmp_name, $path);
$sql=mysqli_query($con,"INSERT INTO uplode(file,text,course,sem,email,userid) values('$file','$text','$course','$sem','$email',$id)");}


  $_insert= "great work  !!!     data insert";




}}
  ?>


<!DOCTYPE html>
<html>

<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="style/style4.css">
</head>
<body>
           <ul>
            <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
           <li>online <br>project<br> submission</li>
           <li></li>
	           <li><a href="myprojects.php">My submit projects</a></li>
             <li></li><li></li>
	                 <li><a href="projects.php">Other Projects</a></li>
	                          
	                           

</ul>
<br>
<br>
<div class="box">

          <form enctype="multipart/form-data" method="POST" action="welcome2.php">
               
               <br><br><span><u>Submit your project </u></span><br><br><br>
              <label>Enter student name:</label>
             <input type="text" name="text" placeholder="enter your  name" required="" autocomplete="off"><br><br>
                 <label>Enter course name: </label>
 <select name="course"  required="">
<h1><option value="">Select your course</option>
 <option>BBA</option>
 <option>BCA</option>
 <option>BSC.IT</option>
 <option>BHM</option>
 <option>CHM</option></h1>
 </select><br><br>
                          <label>Enter semester:</label>
                         &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; <select name="sem"  required="">
<h1><option value="">Select your semester</option>
 <option>1th Semester</option>
 <option>2th Semester</option>
 <option>3th Semester</option>
 <option>4th Semester</option>
 <option>5th Semester</option>
<option>6th Semester</option>
 <option>7th Semester</option>
 <option>8th Semester</option></h1>
 </select><br><br>
                  
                                <label>Enter your email</label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="email" placeholder="email" required="" autocomplete="off"><br><br>
                                  <label>Choose submit file: </label>
                                        <input type="file" name="file" required="">
                          <pre> <input type="reset" name="reset" value="Reset"> <input type="submit" name="submit" value="submit"></pre>
          </form>
    </div>




<script type="text/javascript">
    var validi="<?php  echo  $_insert ?>";
    alert(validi);
  
  </script>
  <script type="text/javascript">
    var valid="<?php  echo   $_emailerror ?>";
    alert(valid);
  
  </script>



	
</body>
</html>



<div class=logout>
  <a href="logout.php"><input type="button" name="logout" value="logout"></a>


</div>
