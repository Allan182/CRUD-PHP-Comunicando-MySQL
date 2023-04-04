<?php

session_start();

$codigo = $_SESSION["usuarioLogado"];

require("Banco.php");

$conta = $_POST["conta"];
$agencia = $_POST["agencia"];
$senha = $_POST["senha"];


$user = new Banco($conta, $agencia, $senha, $codigo);

if ($user->editar() != true || $codigo == null) {
    header("Location: ../../Banco/erro.php");
} else {
    header("Location: ../../Banco/editado.php");
}
