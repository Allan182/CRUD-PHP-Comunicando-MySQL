<?php

session_start();

$codigo = $_SESSION["usuarioLogado"];

require("Contato.php");

$email = $_POST["email"];
$telefone = $_POST["telefone"];


$user = new Contato($telefone, $email, $codigo);

if ($user->editar() != true || $codigo == null) {
    header("Location: ../../Contato/erro.php");
} else {
    header("Location: ../../Contato/editado.php");
}
