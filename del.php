<?php
include 'connect.php';


$sql="DELETE FROM album WHERE album_name Like '$_POST[album_name]'";
$sql2="DELETE FROM artist WHERE artist_name Like '$_POST[artist_name]'";

	$result = mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql2);

if(!$result || !$result1){
	die('ERROR: ' . mysqli_error());
	}
echo "Record Succesfully Deleted, Please Press HOME to View updated list of Albums";
echo "<p><a href='index.php'> HOME</a></p>";


mysqli_close($conn);
?>