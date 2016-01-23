<?php 

class Index_controller {
	
	function action_index() {
		
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