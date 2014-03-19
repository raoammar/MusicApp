<!DOCTYPE.HTML>
<html>
<head>
<header> 
<link rel="stylesheet" type="text/css" href="myStyle.css">

</head>

<body bgcolor="#D3D3D3">
<div id="header">
<h7>To add or delete album please enter userID/Pass: </h7>
<form method="POST" action="pass.php">
<h7>Login:</h7>
<h7>Username: <input type="text" name="username" size="10" maxlength="10" value="" /><br /></h7>
<h7>Password: <input type="password" name="password" size="6" maxlength="6" value="" /><br /></h7>
<input type="submit" value="Login" />
</form>

<h2>Album Record</h2>
</div>
<div id ="Content">

<?php
include 'connect.php';
	$query="SELECT * FROM album";
   $result=mysqli_query($conn,$query);   
	while($row = mysqli_fetch_array($result)){
	extract($row);
	echo "<h3><u>Album Name: </u>$album_name</h3>";
	echo "<h3><u>Album Genre: </u>$album_genre</h3>";
	echo "<h3><a href='details.php?album_id=$album_id'>More Details</a><h3>";
	}
	
	 mysqli_close($conn);

?>
</div>
<div id="footer">
Copy Rights
</div>
</body>

</html>