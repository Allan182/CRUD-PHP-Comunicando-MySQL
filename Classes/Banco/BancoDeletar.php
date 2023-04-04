<?php

require("Banco.php");
session_start();

$codigo = $_SESSION["usuarioLogado"];


$user = new Banco(null, null, null, $codigo);

if ($user->deletar() != true || $codigo == null) {
    header("Location: ../../Banco/erro.php");
} else {
    header("Location: ../../Banco/excluido.php");
}
