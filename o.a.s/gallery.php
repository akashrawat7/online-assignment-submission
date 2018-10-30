
	<?php

            $con=mysqli_connect('localhost','root','','register');
            $sql="SELECT * FROM photos";
            $result=mysqli_query($con,$sql);
            while ( $row=mysqli_fetch_array($result)) 
                {

	               echo "<div id='img_div'>";
                   echo "<img src='images/".$row['image']."'>";
                   echo "<p>" .$row['text']."</p>";
                   echo "</div>";
	      }

?>

<style type="text/css">
#img_div{
 height: 100px;
width:100px;background-image: cover;

}
#img_div:after{

  height: 100px;
width:100px;background-image: cover;

} 
img
{
position: absolute;

 height: 200px;
width:200px;
background-image: cover;

}
p{
	position: absolute;
}
</style>