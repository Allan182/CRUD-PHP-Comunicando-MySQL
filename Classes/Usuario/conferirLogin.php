<?php

session_start();

require('mysql.php');
require("Usuario.php");


$login = $_POST["login"];
$senha = md5($_POST["senha"]);

global $mysql;


$resultado = $mysql->prepare("SELECT * FROM `usuarios` WHERE `login` LIKE ? AND `senha` LIKE ?");
$resultado->bind_param("ss", $login, $senha);
$resultado->execute();


$dados = $resultado->get_result();
$dado = $dados->fetch_all(MYSQLI_ASSOC);

if ($dados->num_rows > 0) {
    $_SESSION["logado"] = 1;
    $_SESSION["usuarioLogado"] = $dado[0]["cod"];
    header("Location: ../../Usuario/logado.php");
} else {
    header("Location: ../../Usuario/erro.php");
    $_SESSION["logado"] = 0;
}





