<?php 


class Login {
	
	public static function action_select() {
		$db = Db::connect();


		$login = $_POST['login'];
		$password = $_POST['password'];

		$db_query = $db->query("SELECT * FROM main WHERE login=" . $login);

		$result = $db_query->fetch();

		if ($db_query) {
			$_SESSION['name'] = $login;
			echo "Вход был успешно выполнен";
		} else {
			echo "неверно указан логин или пароль";
		}
		var_dump($result);
	}
}