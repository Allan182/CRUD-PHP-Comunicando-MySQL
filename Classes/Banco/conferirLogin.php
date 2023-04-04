<?php

session_start();

require('mysql.php');
require("Banco.php");

$conta = $_POST["conta"];
$agencia = $_POST["agencia"];
$senha = md5($_POST["senha"]);

global $mysql;

$resultado = $mysql->prepare("SELECT * FROM `banco` WHERE `conta` LIKE ? AND `agencia` LIKE ? AND `senha` LIKE ?");
$resultado->bind_param("sss", $conta, $agencia, $senha);
$resultado->execute();

$dados = $resultado->get_result();
$dado = $dados->fetch_all(MYSQLI_ASSOC);

if ($dados->num_rows > 0) {
    $_SESSION["logado"] = 1;
    $_SESSION["usuarioLogado"] = $dado[0]["codColuna"];
    header("Location: ../../Banco/logado.php");
} else {
    header("Location: ../../Banco/erro.php");
    $_SESSION["logado"] = 0;
}  
