<?php

class Db {
	
	public static function connect() {
		$params_path = dir . '/config/db_params.php';
		$params = include($params_path);

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['password']);

		return $db;
	}
}