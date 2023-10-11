<h1>Bienvenido a INICIO</h1>
<p>SALUDOS</p>
<link rel="stylesheet" href="css/style.css">
<?php
require_once __DIR__ . "/vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once(__DIR__ . '/controller/Connexion.php');


$conn = new Connection;
$conn->connect();
if (isset($_SESSION['user'])) {
    echo "<br/>";
    echo "\n \n  No Se Ha Logueado";
    session_start();
    $_SESSION['user'] = "Isacc Pabuena";
} else {
    global $_SESSION;
    echo "<br/>";
    echo "\n \n   Se Ha Logueado Con Exito <3";
    echo  $_SESSION['user'] ?? "Hola";
    echo DIRECTORY_SEPARATOR;
}
?>