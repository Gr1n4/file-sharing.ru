<?php 

require_once(dir . '/models/checkin.php');

class Checkin_controller {
	
	function action_index() {
		
		Checkin::action_push();
	}
}