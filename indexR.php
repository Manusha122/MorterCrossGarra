<?php

include("authR.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>

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
    color: #17202A;
}
</style>
	
<link rel="stylesheet" href="css/styleR.css" />
</head>
<body>
<div class="form">
	<p>&nbsp;</p>
  <p>&nbsp;</p>
  
<p>Welcome &nbsp; <?php echo $_SESSION['username']; ?>&nbsp;!</p>
	
	<p>&nbsp;</p>
  
  
<p><a href="dashboardR.php"> <h1>MOTOCROSS GEARR</h1>  </a></p>
	
  <p>&nbsp;</p>
  
<a href="logout.php">Logout</a>
</div>
</body>
</html>
