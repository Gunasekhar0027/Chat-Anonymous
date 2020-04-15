<?php
session_start();
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $_SESSION['name']=$name;
header("location:home.php");
exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta name="viewport"
content="width=device-width,initial-scale=1.0,user-scalable=no">
		<title>Gunasekhar</title>		
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>

.button { 
   width: 100px;
   height:30px; 
   font-size: 20px
}
</style>
			<center><form action="index.php" method="post">
				<input type="text" class="mytext" name="name" placeholder="Enter your name" autocomplete="off" autofocus id="name" required>	
<br>
<br>
				<input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</form></center>
		</div>
	</body>
</html>


























