// Now we check if the data from the login form was submitted, isset() will check if the data exists.
<?php
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
?>