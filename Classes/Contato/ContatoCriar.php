<?php


require("Contato.php");

$email = $_POST["email"];
$telefone = $_POST["telefone"];

$user = new Contato($telefone, $email);


if ($email == "" || $telefone == "") {
    header("Location: ../../Contato/erro.php");
} else if ($user->criar() != true) {
    header("Location: ../../Contato/erro.php");
} else {
    header("Location: ../../Contato/cadastrado.php");
}
