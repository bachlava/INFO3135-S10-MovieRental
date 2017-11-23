<!DOCTYPE html>
<html lang="en">
<head>
<title>ESB Art Gallery</title>
<meta charset="utf-8">
<link rel="stylesheet" href="hbs.css">
</head>
<body>
<div id="wrapper">
<header>
	<h1><a href="index.php">HBS Movie Rental</a></h1>
</header>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="movies.php">Movies</a></li>
		<li><a href="shopcart1.php">Cart</a></li>
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
</nav>
<main>
	<h2>Buy Tickets</h2>
	<form action="checkOut.html" method="GET">
		<fieldset>
			
			<label for="CATEGORY">Select category:  </label>
			<select id="CATEGORY" required="required">
				<option value="Child & Senior - $10/ticket">Child & Senior - $10/ticket</option>
				<option value="Student - $12/ticket">Student - $12/ticket</option>
				<option value="Regular - $16/ticket">Regular - $16/ticket</option>
			</select>
			<br><br>
			<label for="NUMBEROFTICKETS">Number of Tickets: </label>
			<input type="NUMBEROFTICKETS" name="NUMBEROFTICKETS" id="NUMBEROFTICKETS" required="required">
			
			<label for="Subtotal Price">Subtotal Price: </label>
			<input type="text" id="Subtotal Price" name="Subtotal Price">
	
			<label for="Tax">Tax: </label>
			<input type="text" id="Tax" name="Tax">
			
			<label for="Total Price">Total Price: </label>
			<input type="text" id="Total Price" name="Total Price">
			
	
			<table border="1">
			<tr>
			<th><input id="myCalculate" type="button" value="Calculate Total price" onclick="calculateTotalPrice();"></th>
			<th><input id="myCalculate" type="submit" value="Check Out"></th>
			</tr>
			</table>
	 </fieldset>
	</form>

</main>
<footer>
	Copyright &copy; 2015 <a href=#>ESB@gmail.com</a>
</footer>
</div>
</body>
</html>