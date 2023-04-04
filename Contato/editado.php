<?php


require("config.php");

$css =  '<link rel="stylesheet" href="../styleCadastro.css">';
$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$main = '<main>

<form action="logado.php" class="card">

    <h1 class="cadastrado"> Editado com Sucesso! </h1>

    <input type="submit" value="Voltar">

</form>

</main>';


criarHeader($css, $img);

criarMain($main);

criarFooter();
