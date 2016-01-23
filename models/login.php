<?php 


class Login {
	
	public static function action_select() {
		$db = Db::connect();

		session_start();

		$login = $_POST['login'];
		$password = $_POST['password'];

		$db_query = $db->query("SELECT * FROM main WHERE login='$login'");

		echo $db_query;
	}
}