<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
	<style type="text/css">
body {
    background-image: url("images/aaaaa.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
}
	input{
		width: 50%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
body,td,th {
    color: #702406;
}
</style>
	
<link rel="stylesheet" href="css/styleR.css" />
</head>
<body>
<?php
require('dbR.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: indexR.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>Log In</h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="" method="post" name="login">
  <p>
  <input type="text" name="username" placeholder="Username" required />
  <input type="password" name="password" placeholder="Password" required />
  </p>
  <p>&nbsp;</p>
  <p>
    <input name="submit" type="submit" value="Login" />
  </p>
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
