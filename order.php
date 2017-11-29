<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Order");
do_html_body();

$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$startdate = date('Y-m-d H:i:s');
$length = $_POST["length"];
$enddate = date('Y-m-d H:i:s', strtotime("+" . $length . "days"));

if (!isset($_SESSION["ordered"])) {
$sql = "INSERT INTO orders (movieid, userid, orderdate, returndate) VALUES
	('" . $_COOKIE["movieorder"] . "', '" . $_SESSION["userid"] . "', '" . $startdate . "', '" . $enddate . "')";
	 
if ($conn->query($sql) === TRUE) {
    echo "Order Successful. You can now view your movie until " . $enddate . ".";
} else {
    echo "Error during your order.";
}
}
else {
	echo "Order Successful. You can now view your movie until " . $enddate . ".";
}


$conn->close();


?>
</br>
</br>
<?php
display_order_btn();
do_html_footer();

$_SESSION["ordered"] = true;
?>