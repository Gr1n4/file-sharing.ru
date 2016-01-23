<?php 

require_once(dir . '/models/login.php');

class Login_controller {
	
	function action_index() {
		

		Login::action_select();
	}
}