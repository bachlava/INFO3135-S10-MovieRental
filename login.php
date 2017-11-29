<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Login");

$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if((isset($_POST["email"])) && (isset($_POST["password"]))) {
	
	$sql = "SELECT * FROM users WHERE (email = '" . $_POST["email"] . "') AND (password = '" . md5($_POST["password"]) . "')";
	$result = $conn -> query($sql);
	
	if ($result -> num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$idarr[] = $row["userid"];
			$userarr[] = $row["username"];
		}
		
		$_SESSION["userid"] = $idarr[0];
		$_SESSION["username"] = $userarr[0];
		$login = true;
	}
	else {
		echo "Your login information is incorrect or you have not registered.";
	}
}

do_html_body();
if($login==true){echo "<br>You have successfully logged in.";}
do_html_footer();
?>