<?php 


class Forms_controller {
	
	function action_index() {
		include_once(dir . '/view/checkin.php');
		include_once(dir . '/view/login.php');
	}
}