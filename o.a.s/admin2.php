<?php
session_start();
$con=mysqli_connect('localhost','root','','register');
if(isset($_POST['submit']))
{
	$user=$_POST['admin'];
  $pass=$_POST['password'];
  

  $query=mysqli_query($con,"SELECT * from admin where admin='$user' && password='$pass' ");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
{
	$_SESSION['admin']=$user;
	header('location:welcomeadmin.php');
}
else
	$_loginerror= "  Oops...username or password was wrong! error" ;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>login
</title><style>
 body{
		
		 
  background:linear-gradient(
 rgba( 0, 0, 0, 0),
 rgba( 0, 0, 0)
 ),
 url(img5.jpg);
  
 
    background-size: cover;

    background-attachment: fixed;
    background-position: center;
  
		 
		 }
		 
input[type="text"]

{
      width:80%;
      padding: 10px 0px;
	        margin:10px 0px;
	            border-margin:20px;
	              border-color:white;
	                margin-left:10px;
	                    outline:none;
	                       background:white;
	                         display:inline-block;
	                           text-decoration:none;
	                                border:;
	                                 color:black;
	                                 font-size: 16px solid black;
	                                     font-size:15px;
										  border-radius:4px;
	   
}
input[type="submit"]

 { 
                  background:transparent:
                     border:none;
                      outline:none;
                        color:#fff;
                          background:#03a9f4;
                             padding:12px 80px;
	                            border-radius:5px;
	                              margin-left:90px;
					                 margin-top:25px;
	

	 }
	 
	 input[type="button"]

 { 
                  background:transparent:

                  border:none;
                  outline:none;
                   color:#fff;
                    background:green;
                     padding:5px 16px;
	                  border-radius:5px;
	                   margin-left:50px;
					   margin-top:35px;
	

	 }
	 
	 input[type="password"]
               {
	                 width:80%;padding: 10px 0px;
	                  margin:10px 0px;
	                   border-color:white;
	                    color:black;
	                      font-size:15px;
	                        margin-left:10px;
	                        font-size: 16px solid black;
	                                 
	                        outline:none;
	                         background:white;
	                          display:inline-block;
	                           text-decoration:none;
							   border-radius:4px;
	
	                     }
label
          {
               position:absolute;
                padding:px 0;
                 font-size:26px;
                     color:white;
                         pointer-event:none;
                              transition:5s;

                     }
font
 {
              font-family:sans-serif;
               font-size:25px;
                  color:white;
                 font-weight:700;

}
.box{
                position:absolute;
                 margin-top:10%;
                  margin-left:25%;
                   background:transparent;
                    width:500px;
                      height:430px;
                        background: rgba(0,0,0,.0);
                          box-sizing:border-box;
                            box-shadow:0 15px 25px white;
                              border-radius:8px;
}


ul { font-size:20px; margin-left:-10px; margin-right:-10px; margin: -1%; overflow: hidden; background-color:black; text-decoration: none;  list-style-type: none; }
   
 li {  float:left;}  
 li a {display: block;padding:20px;text-decoration:none; color:white;  text-decoration: none; }
  li a:hover{ display:block; background:seagreen;}
  li:nth-child(1){
  margin-left:60%; }

</style>
</head>
<body>

	  <ul>
	

	<li><a href="login.php">Login</a></li>
   <li><a href="register.php">Signup</a></li>
     <li><a href="admin2.php">Admin login</a></li>
	<li><a href="contact.php">Contact</a></li>

</ul>
<form method="POST" action="admin2.php">
<div class="box"><pre>
<h2><font> Admin login</font></h2>
    <label>Admin name</label><br>
   <input type="text" name="admin" placeholder=" username" required="" autocomplete="off">
    <label>Password</label><br>
   <input type="password" name="password" placeholder=" *******" required="">
              
<input type="submit" name="submit" value="login">

</pre>
</div>
</form>
</body>
</html>
<script type="text/javascript">
		var valid="<?php  echo $_loginerror ?>";
		alert(valid);
	</script>

