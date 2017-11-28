<?php
include('output_fns.php');
session_start();
do_html_header("Watching ");
do_html_body();
display_search();

if (isset($_POST['watch_15']) && !empty($_POST['watch_15'])) {
?>		<iframe width="1120" height="630" 
	src="https://www.youtube-nocookie.com/embed/ue80QwXMRHg?rel=0&amp;showinfo=0" 
	frameborder="0" allowfullscreen></iframe>
<?php 
}
if (isset($_POST['watch_1']) && !empty($_POST['watch_1'])) {
?>		<iframe width="1120" height="630" 
	src="https://www.youtube-nocookie.com/embed/PN8il_zxNWM?rel=0&amp;showinfo=0" 
	frameborder="0" allowfullscreen></iframe>
<?php 
}
if (isset($_POST['watch_10']) && !empty($_POST['watch_10'])) {
?>		<iframe width="1120" height="630" 
	src="https://www.youtube-nocookie.com/embed/6Nxc-3WpMbg?rel=0&amp;showinfo=0" 
	frameborder="0" allowfullscreen></iframe>
<?php 
}

?>
<?php
do_html_footer();
?>