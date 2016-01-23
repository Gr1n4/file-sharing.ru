<?php 


class Checkin {
	
	public static function action_push() {
		$db = Db::connect();

		$login = $_POST['login'];
		$password = $_POST['password'];
		$db_query = $db->query("INSERT INTO main (login, password)
			VALUES ('$login', '$password')")
	}
}