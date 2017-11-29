<?php
include('movies_fns.php');
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Checkout");
do_html_body();

if (isset($_SESSION["ordered"])) {
	unset($_SESSION["ordered"]);
}

$conn = new mysqli('localhost', 'root', '', 'movierental');
			
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$movieid = $_POST["rent"];

setcookie('movieorder', $movieid);

$sql = "SELECT * FROM movies WHERE movieid='" . $movieid . "'";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$imgarr[] = $row["imageid"];
			$titarr[] = $row["title"];
		}
		echo '<div style="width:100%;text-align:center;"><img src="images/' . $imgarr[0] . '.jpg" width="182" height="268"/><br/>';
        echo $titarr[0] . '</div><br>';
}


if(!isset($_SESSION["userid"])) {
	echo "You must be logged in to rent a movie.";
}
else {
	
	$sql = "SELECT * FROM orders WHERE movieid='" . $movieid . "' AND userid='" . $_SESSION["userid"] . "'";
	$result = $conn -> query($sql);
	
}

if ($result -> num_rows > 0) {
	echo "You have already ordered this movie.";
}
else {
?>

<form name="order" method="post" action="order.php">
<table border="0" width="500" align="center">
<tr>
<td>Length of Rental</td>
<td><select name="length">
  <option value="1">1 Day: $2.99</option>
  <option value="2">2 Days: $3.99</option>
  <option value="7">7 days: $6.99</option>
</select></td>
</tr>
<tr>
<td>Name on Card</td>
<td><input type="text" name="cardname" value=""></td>
</tr>
<tr>
<td>Credit Card Number</td>
<td><input type="text" name="cardnum" value=""></td>
</tr>
<tr>
<td>Expiry Date</td>
<td><input type="date" name="expdate"></td>
</tr>
<tr>
<td>Security Number</td>
<td><input type="text" name="security" value=""></td>
</tr>
<tr>
</tr>
<tr>
<td colspan=2>
<input type="submit" name="placeorder" value="Rent Movie"></td>
</tr>
</table>
</form>
<?php

}
do_html_footer();
$conn->close();
?>