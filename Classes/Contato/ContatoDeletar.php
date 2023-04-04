<?php

require("Contato.php");
session_start();

$codigo = $_SESSION["usuarioLogado"];


$user = new Contato(null, null, $codigo);

if ($user->deletar() != true || $codigo == null) {
    header("Location: ../../Contato/erro.php");
} else {
    header("Location: ../../Contato/excluido.php");
}
