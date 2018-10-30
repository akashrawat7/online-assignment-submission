
<?php include('contact2.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>

<style>


body{
		
color:gray;
    text-align: center;

  background: powderblue;
  
 
	
}
.contact{
  margin-top: 100px;
  text-transform: uppercase;
  transition: all 4s ease-in-out;

}
.contact h1{
  font-size: 32px;
  line-height: 16px;

}
.contact h2{
  font-size:16px;
}
form{
  margin-top: 50px;
  transition: all 4s ease-in-out;
}
.form-control{

  width:600px;
  background:transparent;
  border:none;
  outline: none;
  border-bottom: 1px solid gray;
  color:#000;
  font-size: 18px;
  margin-bottom: 16px;

}
input{
  height: 45px;

}

form .submit{
  background: #ff5722;
  border-color: transparent;


}
form .submit:hover{
  background: #f44336;
  border-color: transparent;


} .submit{
  background: #ff5722;
  border-color: transparent;
  width:600px;
  font-size: 18px;


}
 .submit:hover{
  background: #f44336;
  border-color: transparent;


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
<div class="contact">
  <h1>Say Hello</h1>
  <h2> We are always ready to serve you!</h2>
</div>

<div class="from">
  <form id="form" method="POST" action="contact.php">
    
    <input type="text" name="name" placeholder="Your name"  class="form-control" required autocomplete="off"><br>
    <input type="text" name="email" placeholder="Your email"  class="form-control" required autocomplete="off"><br>
    <textarea name="message" placeholder="message" row="4" class="form-control"  required="" autocomplete="off"></textarea><br>
    <input type="submit" value="SEND message" name="submit" class="form-control submit" ><br>
      </form>
 <a href="message.php"><input type="submit" value="See Messages " name="Message" class="submit" ></a>
 
</div>

<script type="text/javascript">
    var valid="<?php  echo $_insert ?>";
    alert(valid);
  </script>


</body>
</html>