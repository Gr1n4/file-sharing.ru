<?php 


class Login {
	
	public static function action_select() {
		$db = Db::connect();


		$login = $_POST['login'];
		$password = $_POST['password'];

		$db_query = $db->query("SELECT * FROM main");

		$db_query->setFetchMode(PDO::FETCH_ASSOC);
		$result = $db_query->fetch();

		if ($db_query) {
			if ($result['login'] == $login) {
				$_SESSION['name'] = $login;
				echo "Вход был успешно выполнен";
			} else {
				echo "неверно указан логин или пароль";
			}
		}
		echo $login;
		var_dump($result);
	}
}