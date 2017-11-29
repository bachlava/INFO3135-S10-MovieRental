<?php
include('output_fns.php');
include('movies_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Movie Rental");
do_html_body();

if (isset($_POST['searchstr']) && !empty($_POST['searchstr'])) {
	if(isset($_GET['go'])){
		if(preg_match("/[A-Za-z0-9]+/", $_POST['searchstr'])) {
			$str=$_POST['searchstr']; 
			$conn = new mysqli('localhost', 'root', '', 'movierental');
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			echo "Search results for: " . $str . "<br/>";
			
			$sql = "SELECT * FROM movies 
				WHERE (title LIKE '%$str%') OR (director LIKE '%$str%')";
			$result = $conn -> query($sql);
			
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