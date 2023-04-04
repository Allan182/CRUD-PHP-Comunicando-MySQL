<?php

session_start();

require('mysql.php');
require("Contato.php");


$email = $_POST["email"];
$telefone = $_POST["telefone"];

global $mysql;


$resultado = $mysql->prepare("SELECT * FROM `contato` WHERE `telefone` LIKE ? AND `email` LIKE ?");
$resultado->bind_param("ss", $email, $telefone);
$resultado->execute();


$dados = $resultado->get_result();
$dado = $dados->fetch_all(MYSQLI_ASSOC);

if ($dados->num_rows > 0) {
    $_SESSION["logado"] = 1;
    $_SESSION["usuarioLogado"] = $dado[0]["cod"];
    header("Location: ../../Contato/logado.php");
} else {
    header("Location: ../../Contato/erro.php");
    $_SESSION["logado"] = 0;
}





