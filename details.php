<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="myStyle.css"></head>
<body padding:10px;bgcolor="#D3D3D3">
<div id="header">
<h2>Album Record</h2>
</div>
<div id ="content">

<title>Album details</title>

<?php
include 'connect.php';
	$album_id = $_GET['album_id'];

	$query = "SELECT album.album_id,album.album_name,album.album_year,album.album_genre,artist.artist_name,album.album_cover,artist.artist_name,artist.artist_web FROM album INNER JOIN artist WHERE album.album_id=artist.artist_id AND album.album_id=$album_id";
	$result1=mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result1)){
	extract($row);
	echo "<p><a href='index.php'> Go Back to HomePage</a></p>";
	?>
	<h3>Title: <?php echo "$album_name"; ?></h3>
	<h5>Year: <?php echo "$album_year"; ?></h5>
	<h5>Genre: <?php echo "$album_genre"; ?></h5>
	<h5>Artist Name: <?php echo "$artist_name"; ?></h5>
	<h5>Artist Web: <?php echo "$artist_web"; ?></h5>
	<img src="<?php echo "$album_cover"; ?>" alt="album_cover" width="405" height="405" /> 
	<?php
	}
	?>
	</div>
<div id="footer">
Copy Rights
</div>
</body>
</html>