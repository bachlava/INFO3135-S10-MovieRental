<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Movie Rental");

if (isset($_SESSION['userid'])) {

	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo "You have been logged out";
	
}
else {
	
	echo "You were not logged in.";

}

do_html_body();
do_html_footer();
?>