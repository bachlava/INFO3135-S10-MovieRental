<?php
include('output_fns.php');
session_start();
do_html_header("HBS Contact");
do_html_body();
display_search();
?>
	<h2>Want to get in touch with us?</h2>
	<h3>Get in Contact with a HBS Movie Rental Representative</h3>
	<p style="font-size: 90%;">We'll get back to you via via e-mail or phone as soon as possible.</p>
	<form action="mailto:john@doe.com" method="post" enctype="text/plain">
	<label for="myFName">First Name* </label>
	<input type="text" name="myFName" required="required">
	
	<label for="myLName">Last Name* </label>
	<input type="text" name="myLName" required="required">
	
	<label for="myEmail">E-mail* </label>
	<input type="email" name="myEmail" required="required">
	
	<label for="myPhone">Phone* </label>
	<input type="tel" name="myPhone" required="required">
	
	<label for="myComments">Comments: </label>
	<textarea name="myComments" id="myComments" rows="4" cols="40"></textarea>
	
	<input type="submit" value="Submit" id="mySubmit">
	</form>
	<p style="font-size: 80%; font-style: italic;">Required information is marked with an asterisk (*)</p>
<?php
do_html_footer();
?>
