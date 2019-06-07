<?php
	session_start();
	
	function logged_in() {
		return isset($_SESSION['email']);
	}
	function logged_inn() {
		return isset($_SESSION['email']);
	}
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("show_alumni.php?link=");
		}
	}
	function confirm_logged_inn() {
		if (!logged_inn()) {
			redirect_to("index.php");
		}
	}
?>
