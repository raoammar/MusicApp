
<?php
// Establishing the connection to the database
$conn=mysqli_connect('localhost','root','rao12345','assignment_1_2824199');
//If it is not connected to the database
if(!$conn){
die('Connection unsuccessful' . mysqli_error());}
?>
