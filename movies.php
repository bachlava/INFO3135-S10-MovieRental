<?php
include('output_fns.php');
include('movies_fns.php');
session_start();
do_html_header("HBS Movies");
do_html_body();
display_search();
?>

<form method="post" action="movies.php" id="genreform">
	<label></label>
	<select name="genre">
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'all') { ?>selected="true" <?php }; ?> value="all">All</option>
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'action') { ?>selected="true" <?php }; ?> value="action">Action</option>
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'comedy') { ?>selected="true" <?php }; ?> value="comedy">Comedy</option>
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'drama') { ?>selected="true" <?php }; ?> value="drama">Drama</option>
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'family') { ?>selected="true" <?php }; ?> value="family">Family</option>
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'horror') { ?>selected="true" <?php }; ?> value="horror">Horror</option>
		<option <?php if (isset($_POST['genre']) && $_POST['genre'] == 'romance') { ?>selected="true" <?php }; ?> value="romance">Romance</option>
	</select>
	<input type="submit" value="Search by Genre"/>
</form>

<?php
$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['genre'])) {
	$genre = $_POST['genre'];
	switch ($genre) {
		case "all":
			$sql = "SELECT * FROM movies";
			$result = $conn -> query($sql);
			break;
		case "action":
			$sql = "SELECT * FROM movies WHERE genre='Action'";
			$result = $conn -> query($sql);
			break;
		case "comedy":
			$sql = "SELECT * FROM movies WHERE genre='Comedy'";
			$result = $conn -> query($sql);
			break;
		case "drama":
			$sql = "SELECT * FROM movies WHERE genre='Drama'";
			$result = $conn -> query($sql);
			break;
		case "family":
			$sql = "SELECT * FROM movies WHERE genre='Family'";
			$result = $conn -> query($sql);
			break;
		case "horror":
			$sql = "SELECT * FROM movies WHERE genre='Horror'";
			$result = $conn -> query($sql);
			break;
		case "romance":
			$sql = "SELECT * FROM movies WHERE genre='Romance'";
			$result = $conn -> query($sql);
			break;
	}
} 
else {
	$sql = "SELECT * FROM movies";
	$result = $conn -> query($sql);
}

display_movies($result);
$conn->close();
do_html_footer();
?>