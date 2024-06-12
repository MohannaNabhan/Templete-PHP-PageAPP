<?php
/**
 * Definimos las Constantes del la APP
 */
session_start();
date_default_timezone_set("America/Merida");
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATH", ROOT. "app" .DS);
require_once APP_PATH . "Config.php";
require_once APP_PATH . "Database.php";
require_once APP_PATH . "Model.php";


/** 
 * Sacamos informacion del URL
 */
$request = $_SERVER["REQUEST_URI"];
$request = trim($request, "/");
$request = parse_url($request, PHP_URL_PATH);
$_basePath = "./public/pages/";

/**
 * Lista de rutas permitidas
 */

$routes = [
    ""           => $_basePath . "home.php",
    "home"       => $_basePath . "home.php",
    "register"   => $_basePath . "register.php",
    "login"      => $_basePath . "login.php",
    "about"      => $_basePath . "about.php",
];

/**
 * Checkea si existe y si existe, guarda el archivo para llamar luego
 */
if (array_key_exists($request, $routes)) { 
    ob_start();
    include $routes[$request];
    $content = ob_get_clean();
} else {
    ob_start();
    include "./public/pages/404.php";
    $content = ob_get_clean();
}

/**
 * Construye la pagina Web
 */
include_once "./components/header.php";
include_once "./components/navbar.php";
echo $content;
include_once "./components/footer.php";










