<?php

$path = $_SERVER["REQUEST_URI"];
switch ($path) {
    case "/":
        include_once("pages/main.php");
        break;
    case "/index.php":
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /");
        break;
    case "/charters":
        include_once("pages/charters.php");
        break;
    case "/tshot":
        include_once("pages/tshot.php");
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        include_once ("pages/404.php");

}
