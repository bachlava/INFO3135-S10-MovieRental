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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title><?php echo $title; ?></title>
</head>
<?php
}

function do_html_body()
{
  ?>
<body>
<div id="wrapper">
<?php
	if (!isset($_SESSION["userid"])) {
	?>
<div id="login">
	<div id="register">
		<a href="signup.php">Register</a>
	</div>
	<div id="loginContainer">
		<a href="#" id="loginButton"><span>Login</span><em></em></a>
		<div style="clear:both"></div>
		<div id="loginBox">                
			<form id="loginForm" action="login.php" method = "POST">
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
			</form>
		</div>
    </div>
</div>
	<?php 
	}
	else {
	?>	
	
	<div id="register">
		<a href="logout.php">Logout</a>
	</div>
	<div id="register">
		<a href="myorders.php">My Orders</a>
	</div>
	<div style="color: #FFFFFF;">
		<?php
		if(isset($_SESSION["username"])){
			echo "You are logged in as " . $_SESSION["username"];
		}
		?>
	</div>
	
	<?php	
	}
	?>
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
function display_watch_btn($id) {
	?>	<form method="post" action="watch.php">
		<button type="submit" name="watch_<?php echo $id ?>" value="Watch" class="btn">Watch</button>
		</form>
<?php 
}

//placeholder rent button
function display_rent_btn($id) {
	?>	<form method="post" action="checkout.php">
		<button type="submit" name="rent" value="<?php echo $id ?>" class="btn">Rent</button>
		</form>
<?php 
}

function display_order_btn() {
	?>	<form method="post" action="myorders.php">
		<button type="submit" name="order" value="My Orders" class="btn">My Orders</button>
		</form>
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