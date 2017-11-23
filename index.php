<!DOCTYPE html>
<?php
	include('movie_sc_fns.php');
	session_start();
	do_html_header("HBS Movie Rental");
	
	if(isset($_SESSION['admin_user'])) {
    display_button("admin.php", "admin-menu", "Admin Menu");
  }
  do_html_footer();
?>

