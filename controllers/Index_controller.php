<?php 

class Index_controller {
	
	function action_index() {
		session_start();
		$_SESSION['name'] = 'lol';
		if (isset($_SESSION['name'])) {
			include_once(dir . '/view/list.php');
		} else {
			?>
			<a href="forms">Check in or Login</a>
			<?php
		}
	}
}
?>