<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Movie Rental");
do_html_body();

$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$startdate = date('Y-m-d H:i:s');
$length = $_POST["length"];
$enddate = date('Y-m-d H:i:s', strtotime("+" . $length . "days"));

$sql = "INSERT INTO orders (movieid, userid, orderdate, returndate) VALUES
	('" . $_COOKIE["movieorder"] . "', '" . $_SESSION["userid"] . "', '" . $startdate . "', '" . $enddate . "')";
	 
$result = $conn -> query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Order Successful. You can now view your movie until" . $enddate . ".";
} else {
    echo "Error during your order.";
	echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>
</br>
</br>
<a href="myorders.php">My Orders</a>

<?php
do_html_footer();
?>