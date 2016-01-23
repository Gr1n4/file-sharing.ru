<?php 

require_once(dir . '/models/checkin.php');

class Checkin_controller {
	
	function action_index() {
		include_once(dir . '/view/checkin.php');
		Checkin::action_push();
	}
}