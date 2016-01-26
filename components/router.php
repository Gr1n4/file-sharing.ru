<?php

class Router {
	private $routes;
	private $i;

	public function __construct() {
		$path_routes = dir . '/config/routes.php';
		$this->routes = include($path_routes);
	}
	public function run() {

		if (!empty($_SERVER['REQUEST_URI'])) {
			$uri = trim($_SERVER['REQUEST_URI'], '/');
		}
		$this->i = 0;
		foreach ($this->routes as $uriPattern => $path) {
			$this->i++;
			if (preg_match("~$uriPattern~", $uri, $matches)) {
				$param_rout = preg_replace("~$uriPattern~", $path, $uri);
				$segments = explode('/', $param_rout);


				$controller_name = ucfirst(array_shift($segments) . '_controller');
				$action_name = 'action_' . array_shift($segments);
				$controller_file = dir . '/controllers/' . $controller_name . '.php';

				if (file_exists($controller_file)) {
					include_once($controller_file);
				}
				$param = $segments;

				$controller_obj = new $controller_name;
				$result = $controller_obj->$action_name($param);
				if ($result != NULL) {
					break;
				}
			} elseif (count($this->routes) == $this->i) {
				header('Location: /');
			}
		}

	}
}