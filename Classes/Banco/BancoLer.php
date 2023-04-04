<?php
session_start();

$codigo = $_SESSION["usuarioLogado"];


require("configClass.php");
require("Banco.php");


$img = '<img src="../../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$css = '<link rel="stylesheet" href="../../styleLogin.css">';
$main = '<main> <form action="../../Banco/logado.php" class="card"> <h1 class="cadastrado"> Dados </h1> <p class="listarDados">';

if ($codigo != "" || $codigo != null) {
    $user = new Banco();
    $dados = $user->lerByID($codigo);
    criarHeader($css, $img);
    criarMain($main);
    echo "Conta: " . $dados[0]["conta"] . '<br>'; 
    echo  "Agência : " . $dados[0]["agencia"] . '<br>';
    echo  "Senha : " . $dados[0]["senha"];
    criarListar();
} else {
    header("Location: ../../Banco/erro.php");
};
