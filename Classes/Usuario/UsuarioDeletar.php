<?php

require("Usuario.php");
session_start();

$codigo = $_SESSION["usuarioLogado"];


$user = new Usuario(null, null, $codigo);

if ($user->deletar() != true || $codigo == null) {
    header("Location: ../../Usuario/erro.php");
} else {
    header("Location: ../../Usuario/excluido.php");
}
