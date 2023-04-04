<?php

require("Banco.php");

$agencia = $_POST["agencia"];
$conta = $_POST["conta"];
$senha = $_POST["senha"];


$user = new Banco($conta, $agencia, $senha);

if ($user->criar() != true) {
    header("Location: ../../Banco/erro.php");
} else {
    header("Location: ../../Banco/cadastrado.php");
}
