<?php
include('output_fns.php');
include('movies_fns.php');
session_start();
do_html_header("HBS Movie Rental");
do_html_body();
display_search();

$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM movies";
$result = $conn -> query($sql);

display_movies($result);

do_html_footer();
?>