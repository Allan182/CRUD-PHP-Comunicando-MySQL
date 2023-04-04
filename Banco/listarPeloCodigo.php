<?php
session_start();
$codUsuario = $_SESSION["usuarioLogado"];
require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>

<form action="" class="card" id="form" method="POST">

    <h2> Informe seu Código </h2>

    <span>
        <label for="codigo"> Código: </label>
        <input class="normal" type="text" name="codigo" placeholder="Código" id="codigo" value="'.$codUsuario.'" />
    </span>

    <input type="submit" value="Listar" onclick="listarPeloID()" />

</form>
</main>';

$css =  '<link rel="stylesheet" href="../styleLogin.css">';


criarHeader($css, $img);

criarMain($main);

criarFooter();
