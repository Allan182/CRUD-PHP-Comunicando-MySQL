<?php
session_start();

$codigo = $_SESSION["usuarioLogado"];

require("configClass.php");
require("Contato.php");


$img = '<img src="../../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$css = '<link rel="stylesheet" href="../../styleLogin.css">';
$main = '<main> <form action="../../Contato/logado.php" class="card"> <h1 class="cadastrado"> Dados </h1> <p class="listarDados">';

if ($codigo != "" || $codigo != null) {
    $user = new Contato();
    $dados = $user->lerByID($codigo);
    criarHeader($css, $img);
    criarMain($main);
    echo "Email: " . $dados[0]["email"] . '<br>'; 
    echo  "Telefone : " . $dados[0]["telefone"];
    criarListar();
} else {
    header("Location: ../../Contato/erro.php");
};


