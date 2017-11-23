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
	<h2>Interested in a particular piece?</h2>
	<h3>Make an appointment with us:</h3>
	<p style="font-size: 90%;">Choose a preferred date of appointment, if we aren't able to comply,<br>we'll contact you via e-mail or phone.</p>
	<form method="post" action="http://webdevbasics.net/scripts/demo.php">
	<label for="myFName">First Name* </label>
	<input type="text" name="myFName" required="required">
	
	<label for="myLName">Last Name* </label>
	<input type="text" name="myLName" required="required">
	
	<label for="myEmail">E-mail* </label>
	<input type="email" name="myEmail" required="required">
	
	<label for="myPhone">Phone* </label>
	<input type="tel" name="myPhone" required="required">
	
	<label for="appDate">Appointment Date: </label>
	<input type="date" name="appDate" required="required">
	
	<label for="myComments">Comments: </label>
	<textarea name="myComments" id="myComments" rows="4" cols="40"></textarea>
	
	<input type="submit" value="Submit" id="mySubmit">
	</form>
	<p style="font-size: 80%; font-style: italic;">Required information is marked with an asterisk (*)</p>
</main>
<footer>
	Copyright &copy; 2015 <a href=#>ESB@gmail.com</a>
</footer>
</div>
</body>
</html>