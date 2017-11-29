<?php
include('output_fns.php');
if(!isset($_SESSION)){session_start();}
do_html_header("HBS Movie Rental");
do_html_body();
do_html_footer();
?>