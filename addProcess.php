<?php
include 'connect.php';		// including the connection file

	$sql="INSERT INTO album (album_name, album_genre, album_year, album_cover)
	VALUES('$_POST[album_name]','$_POST[album_genre]','$_POST[album_year]','$_POST[album_cover]')";
	// inserting the data in the database
	$sql2="INSERT INTO artist(artist_name, artist_web)			
	VALUES('$_POST[artist_name]','$_POST[artist_web]')";
	
    $result = mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql2);				
	if(!$result || !$result1){
	die('ERROR: ' . mysqli_error());
	}
	echo "<strong><h2>One Album added succesfully. Please Press home to View Albums</strong></h2></br>";
	echo "<p><a href='index.php'> HOME</a></p>";
	
	//closing connection of the database
	mysqli_close($conn);
?>