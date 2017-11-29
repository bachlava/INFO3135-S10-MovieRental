<?php
include('output_fns.php');
include('movies_fns.php');
session_start();
do_html_header("HBS Movie Rental");
do_html_body();
display_search();

if (isset($_POST['searchstr']) && !empty($_POST['searchstr'])) {
	if(isset($_GET['go'])){
		if(preg_match("/[A-Za-z0-9]+/", $_POST['searchstr'])) {
			$conn = new mysqli('localhost', 'root', '', 'movierental');
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$stmt = $conn->prepare("SELECT * FROM movies 
				WHERE (title LIKE ?) OR (director LIKE ?)");
			$stmt->bind_param('ss', $str, $str);
			$str= "%" . $_POST['searchstr'] . "%";  
			$stmt->execute();
			$result = $stmt->get_result();
			
			echo "Search results for: " . $_POST['searchstr'] . "<br/>";
			display_movies($result);
			
			$conn->close();
		}
		else {
			echo  "<p>Please enter a valid search query.</p>"; 
		}
	}
} 
else { 
	echo  "<p>Please enter a search query.</p>"; 
} 


?>
<?php
do_html_footer();
?>