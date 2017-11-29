<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Movie Rental");
do_html_body();

$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_SESSION["userid"])) {
	
	$userid = $_SESSION["userid"];
	$sql = "SELECT * FROM orders LEFT JOIN movies ON orders.movieid = movies.movieid WHERE userid = " . $userid . "";
	$result = $conn -> query($sql);
	
	
	if ($result -> num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$midarr[] = $row["movieid"];
			$titarr[] = $row["title"];
			$ordarr[] = $row["orderdate"];
			$retarr[] = $row["returndate"];
			$imgarr[] = $row["imageid"];
		}
		for ($i = 0; $i < count($titarr); $i++) {
			echo '<div class="movie">';
			echo '<img src="images/' . $imgarr[$i] . '.jpg" width="182" height="268"/><br/>';
			echo 'Title: ' . $titarr[$i] . '<br/>';
			echo 'Date Ordered: ' . $ordarr[$i] . '<br/>';
			echo 'Movie Expires: ' . $retarr[$i] . '<br/>';
			//display_watch_btn($idarr[$i]);
			echo '</div>';
		}
	}
	else {
		echo "You have no active movie orders.";
	}
}

else {
	
	echo "You are not logged in. Cannot view your orders.";
	
}

do_html_footer();
?>