<?php 

require_once(dir . '/models/login.php');

class Login_controller {
	
	function action_index() {
		session_start();

		Login::action_select();
	}
}