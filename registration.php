<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
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
		color: #F3590A
	}
body,td,th {
    color: #702406;
}
</style>
	
<link rel="stylesheet" href="css/styleR.css" />
</head>
<body>
	
<p>
  <?php
require('dbR.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
			<p>&nbsp;</p>
			
<h2><h3>You are registered successfully.</h3></h2>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="form">
  <h1>Registration</h1>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<form name="registration" action="" method="post">
  <p>
  <input type="text" name="username" placeholder="Username" required />
  <input type="email" name="email" placeholder="Email" required />
  <input type="password" name="password" placeholder="Password" required />
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" value="Register" />
  </p>
</form>
</div>
<?php } ?>
</body>
</html>
