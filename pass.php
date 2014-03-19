<html>
<body>
<head><link rel="stylesheet" type="text/css" href="myStyle.css"></head>
<div id="header">
<h2>Album Record</h2>
</div>
<div id ="Content">
<?php
$username=$_POST['username'];
$password=$_POST['password'];

$user="ammar";
$pass="123";

if($username==$user && $password==$pass){

header("Location: http://localhost/assignment 1/add.html?view=$user");
}
else{
echo "Wrong login pasword ";
echo "Please go back to re-enter username/password";
echo "<p><a href='index.php'> HOME</a></p>";
}
?>
</div>
<div id = "footer">
Copyritghts
</div>
</body>

</html>