<?php
include('movie_sc_fns.php');
session_start();
do_html_header("HBS Movie Rental");

if (isset($_POST['searchstr'])){
	 
} 
else { 
	echo  "<p>Please enter a search query.</p>"; 
} 

do_html_footer();
?>