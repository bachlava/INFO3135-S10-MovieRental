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
	<h2>Payment</h2>
	<form method="post" action="http://webdevbasics.net/scripts/demo.php">
		<fieldset>
			
			<label for="Name On Card">Full Name on card: </label>
			<input type="text" name="Name On Card" id="NameOnCard" required="required">
			
			<label for="Card Number">Card Number: </label>
			<input type="text" name="Card Number" id="CardNumber" required="required">
					
			<label for="Expiry Date">Expiry Date: </label>
			<input type="date" name="Expiry Date" id="ExpiryDate" required="required">
		
			<label for="Security Number">Security Number: </label>
			<input type="text" name="Security Number" id="SecurityNumber" required="required">
	
			<table border="1">
			<tr>
			<th><input id="mySubmit" type="submit" value="Submit"></th>
			<th><input type="reset"></th>
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