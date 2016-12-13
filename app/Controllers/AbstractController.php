<?php

namespace App\Controllers;

use App\Library\FrontController;

class AbstractController
{
	private $controller;
	private $action;
	private $params;

	public function notFound()
	{
		$this->view();
	}

	public function setController($controller)
	{
		$this->controller = $controller;
	}

	public function setAction($action)
	{
		$this->action = $action;
	}

	public function setParams($params)
	{
		$this->params = $params;
	}

	protected function view()
	{
		if ($this->action == FrontController::NOT_FOUND_ACTION) {
			require_once VIEW_PATH . 'errors' . DS . 'notFoundPage.php';
		} else {
			if ($this->controller == 'index') {
				$view = VIEW_PATH  . 'site'. DS . $this->controller . '.php';
			} elseif ($this->action == 'dashboard') {
				$view = VIEW_PATH  . 'admin' . DS .$this->action . '.php';
			} else {
				$view = VIEW_PATH  . 'admin' . DS . $this->controller . DS .$this->action . '.php';
			}

			if (file_exists($view)) {
				require_once $view;
			} else {
				require_once VIEW_PATH . 'errors' . DS . 'notViewExit.php';
			}
		}

	}
}
