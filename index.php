<?php
include('output_fns.php');
session_start();
do_html_header("HBS Movie Rental");
do_html_body();
display_search();
?>

<?php
do_html_footer();
?>