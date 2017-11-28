<?php
function do_html_header($title = '') 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="hbs.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
<script src="js/login.js"></script>
<title><?php echo $title; ?></title>
</head>
<?php
}

function do_html_body()
{
  ?>
<body>
<div id="wrapper">
<div id="login">
	<div id="register">
		<a href="signup.php">Register</a>
	</div>
	<div id="loginContainer">
		<a href="#" id="loginButton"><span>Login</span><em></em></a>
		<div style="clear:both"></div>
		<div id="loginBox">                
			<form id="loginForm" action="/login.php" method = POS>T
				<fieldset id="body">
					<fieldset>
						<label for="email">Email Address</label>
						<input type="text" name="email" id="email" />
					</fieldset>
					<fieldset>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" />
					</fieldset>
					<input type="submit" id="login" value="Sign in" />
					<label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
				</fieldset>
				<span><a href="#">Forgot your password?</a></span>
			</form>
		</div>
    </div>
</div>
<header>
	<h1><a href="index.php">HBS Movie Rental</a></h1>
</header>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="movies.php">Movies</a></li>
		<li><a href="contact.php">About</a></li>
	</ul>
</nav>
<main>
<?php
}

function do_html_footer() {
?>	</main>
	</div>
	</body>
	</html>
<?php
}

function do_html_heading($heading) {
?>
  <h2><?php echo $heading; ?></h2>
<?php
}

function display_search() {
?>
<div id="searchbox">
<form method="post" action="search.php?go"  id="searchform"> 
  <input type="text" name="searchstr" id="searchstr" placeholder="Search...">
  <input type="submit" name="searchbtn" id="searchbtn" value="Search"> 
</form>
</div>
<?php
}

function test_input($str) {
  $str = trim($str);
  $str = stripslashes($str);
  $str = htmlspecialchars($str);
  
  return $str;
}

function phone_format($str) {
	$str = preg_replace('/\D+/', '', $str);
	return $str;
}
?>