<?php

class Router {
	private $routes;

	public function __construct() {
		$path_routes = dir . '/config/routes.php';
		$this->routes = include($path_routes);
	}
	public function run() {

		if (!empty($_SERVER['REQUEST_URI'])) {
			$uri = trim($_SERVER['REQUEST_URI'], '/');
		}

		foreach ($this->routes as $uriPattern => $path) {
			if (preg_match("~$uriPattern~", $uri)) {
				$segments = explode('/', $path);

				$controller_name = ucfirst(array_shift($segments) . '_controller');

				$action_name = 'action_' . array_shift($segments);

				$controller_file = dir . '/controllers/' . $controller_name . '.php';

				if (file_exists($controller_file)) {
					include_once($controller_file);
				}

				$controller_obj = new $controller_name;
				$result = $controller_obj->$action_name();
				if ($result != NULL) {
					break;
				}
			}
		}

	}
}