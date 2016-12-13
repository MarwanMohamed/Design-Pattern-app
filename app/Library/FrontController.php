<?php
namespace App\Library;

class FrontController
{
	const NOT_FOUND_CONTROLLER = 'App\Controllers\\NotFoundController';
	const NOT_FOUND_ACTION   = 'notFound';

	private $controller = 'index';
	private $action 	= 'show';
	private $params 	= array();

	public function __construct()
	{
		$this->parseUrl();
	}

	private function parseUrl()
	{
		$url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), 4);

		if ($url[0] == 'control' && ! isset($url[1])) {
			$this->controller = $url[0];
			$this->action = 'dashboard';
		}

		if (isset($url[1]) && $url[1] != '') {
			$this->controller = $url[1];
		}

		if (isset($url[2]) && $url[2] != '') {
			$this->action = $url[2];
		}

		if (isset($url[3]) && $url[3] != '') {
			$this->params = explode('/', $url[3]);
		}
	}

	public function dispatch()
	{
		$controllerClassName = 'App\Controllers\\' . ucfirst($this->controller). 'Controller';
		$actionName = $this->action;
		if (!class_exists($controllerClassName)) {
			$controllerClassName = SELF::NOT_FOUND_CONTROLLER;
		}
		$controller = new $controllerClassName();
		if (!method_exists($controller, $actionName)) {
			$this->action = $actionName = SELF::NOT_FOUND_ACTION;
		}
		$controller->setController($this->controller);
		$controller->setAction($this->action);
		$controller->setParams($this->params);
		$controller->$actionName();
	}

}
