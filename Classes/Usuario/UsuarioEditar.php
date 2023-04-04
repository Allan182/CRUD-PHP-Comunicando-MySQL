<?php

session_start();

$codigo = $_SESSION["usuarioLogado"];

require("Usuario.php");

$login = $_POST["login"];
$senha = $_POST["senha"];


$user = new Usuario($login, $senha, $codigo);

if ($user->editar() != true || $codigo == null) {
    header("Location: ../../Usuario/erro.php");
} else {
    header("Location: ../../Usuario/editado.php");
}
