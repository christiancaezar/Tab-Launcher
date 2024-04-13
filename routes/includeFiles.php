<?php 
session_start();

include_once('../config.php');

//controllers
include_once(ROOT . '/controller/main.controller.php');
include_once(ROOT . '/controller/router.php');
include_once(ROOT . '/controller/login.controller.php');
include_once(ROOT . '/controller/register.controller.php');
include_once(ROOT . '/controller/dashboard.controller.php');


?>