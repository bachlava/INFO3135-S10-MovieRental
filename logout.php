<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Logout");

if (isset($_SESSION['userid'])) {

	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	$logout = true;
	
}
else {
	
	echo "You were not logged in.";

}

do_html_body();
if($logout==true){echo "<br>You have been logged out";}
do_html_footer();
?>