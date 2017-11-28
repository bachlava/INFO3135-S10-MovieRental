<?php
function display_movies($result) {
	if ($result -> num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$midarr[] = $row["movieid"];
			$titarr[] = $row["title"];
			$dirarr[] = $row["director"];
			$genarr[] = $row["genre"];
			$lenarr[] = $row["length"];
			$relarr[] = $row["releasedate"];
			$imgarr[] = $row["imageid"];
		}

		for ($i = 0; $i < count($titarr); $i++) {
			echo '<div class="movie">';
			echo '<img src="images/' . $imgarr[$i] . '.jpg" width="182" height="268"/><br/>';
			echo 'Title: ' . $titarr[$i] . '<br/>';
			echo 'Director: ' . $dirarr[$i] . '<br/>';
			echo 'Genre: ' . $genarr[$i] . '<br/>';
			echo 'Length: ' . $lenarr[$i] . ' minutes<br/>';
			echo 'Release Date: ' . $relarr[$i] . '<br/>';
			echo '<form name="rent" method="post" action="checkout.php">';
			echo '<button type="submit" name="rent" value="' . $midarr[$i] .'">Rent This Movie</button>';
			echo '</div>';
		}
	}
	else {
		echo "0 matches found";
	}
} 