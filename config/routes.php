<?php
 $url = trim($_SERVER['REQUEST_URI'],"/");
$road = "/last/index.php";
switch ($url){
    case "last/index.php":
        require_once ROOT_DIR . '/parts/0.parts.php';
        break;
    case "last/index.php/register":
        require_once ROOT_DIR . '/parts/pages/register.php';
        break;
    case "last/index.php/login":
        require_once ROOT_DIR . '/parts/pages/login.php';
        break;
    case "last/index.php/account":
        break;
    default:
        redirect_home();
}

