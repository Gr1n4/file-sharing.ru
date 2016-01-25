<?php 

class Index_controller {
	
	function action_index() {
		
		if (isset($_SESSION['user'])) {
			include_once(dir . '/view/list.php');
		} else {
			include_once dir .'/view/index.php';
		}
	}
}
?>