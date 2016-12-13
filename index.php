<?php

use App\Library\FrontController;
use App\Library\Database\Database;

require_once 'app/config.php';
require_once __DIR__. '/vendor/autoload.php';

session_start();

$database = new Database();

$front = new FrontController();
$front->dispatch();
