<?php

require("Usuario.php");

$senha = $_POST["senha"];
$login = $_POST["login"];

$user = new Usuario($login, $senha);

if ($user->criar() != true) {
    header("Location: ../../Usuario/erro.php");
} else {
    header("Location: ../../Usuario/cadastrado.php");
}
