<?php 

$utilizador = $_REQUEST["util"];
$password = $_REQUEST["pass"];
$nivel = $_REQUEST["nivel"];
//$ = $_REQUEST[""];

echo "<h2>Olá $utilizador, a sua password é $password</h2>";
switch ($nivel)
{
    case "adm":
        echo "<br> Administrador";
        break;
    case "su":
        echo "<br> Super User";
        break;
    default:
        echo "<br> User";
        break;
}

?>