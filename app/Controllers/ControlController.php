<?php

namespace App\Controllers;

use App\Library\Helper;


class ControlController extends AbstractController 
{
	use Helper;

	public function __construct()
	{
		if (!isset($_SESSION['admin'])) {
			// $this->redirect('login');
		}
	}

	public function dashboard()
	{
		$this->view();
	}


}