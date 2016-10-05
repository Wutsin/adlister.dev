<?php 
	// session start needs to be here so it can pick up where it left off
	session_start();

    require_once __DIR__ . "/../../utils/Auth.php";

	// it is better to use all four session elements when logging someone out. doing just the 2 step method is not going to be as strong for your client
	function clearSession() {
		Auth::logout();
		// takes you to the login page so you can log back in
		header('Location: /views/home.php');
		die();
	}

	// run the clearSession function

	clearSession();
?>