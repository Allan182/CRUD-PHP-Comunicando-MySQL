<?php
session_start();

$codigo = $_SESSION["usuarioLogado"];

require("configClass.php");
require("Usuario.php");


$img = '<img src="../../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$css = '<link rel="stylesheet" href="../../styleLogin.css">';
$main = '<main> <form action="../../Usuario/logado.php" class="card"> <h1 class="cadastrado"> Dados </h1> <p class="listarDados">';

if ($codigo != "" || $codigo != null) {
    $user = new Usuario();
    $dados = $user->lerByID($codigo);
    criarHeader($css, $img);
    criarMain($main);
    echo "Login: " . $dados[0]["login"] . '<br>';
    echo  "Senha : " . $dados[0]["senha"];
    criarListar();
} else {
    header("Location: ../../Usuario/erro.php");
};
