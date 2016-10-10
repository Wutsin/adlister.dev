<?php 
    require_once __DIR__ . "/../../utils/Auth.php";

	function clearSession() {
		Auth::logout();
		header('Location: /');
		die();
	}

	clearSession();
?>