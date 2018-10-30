<?php include('code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
		
		 
  background:linear-gradient(
 rgba( 0, 0, 0, 0),
 rgba( 0, 0, 0)
 ),
 url(back.jpg);
  
 
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
                            box-shadow:0 15px 25px rgba(0,0,0,.5);
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
	  <ul >
	

	<li><a href="login.php">Login</a></li>
   <li><a href="register.php">Signup</a></li>
     <li><a href="admin2.php">Admin login</a></li>
	<li><a href="contact.html">Contact</a></li>

</ul>


	

	<div class="box">
	<form method="POST" action="register.php">
		<br>
		<font>Sign up</font><br><br>
		<br>
		<label>Username</label><br><br>
		<input type="text" name="username" placeholder="  Username" required="" autocomplete="off"><br>

		<label>Email</label><br><br>
		<input type="text" name="email" placeholder="  Email" required="" autocomplete="off"><br>

		
		<label>Password</label><br><br>
		<input type="password" name="password" placeholder="  Password" required="" autocomplete="off"><br>
		
		<input type="submit" name="register" value="register">
		
	</form>
</div>

<script type="text/javascript">
		var valid="<?php  echo $_signuperror ?>";
		alert(valid);
		
	</script>
	<script type="text/javascript">
		var valide="<?php  echo  $_emailerror ?>";
		alert(valide);
	
	</script>
		<script type="text/javascript">
		var validi="<?php  echo  $_insert ?>";
		alert(validi);
	
	</script>


</body>
</html>