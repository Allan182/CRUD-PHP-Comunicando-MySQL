<?php

require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>

    <main>

        <form action="login.php" class="card">

            <h1 class="cadastrado"> Excluido com Sucesso! </h1>

            <input type="submit" value="Voltar">

        </form>

    </main>

</main>';

$css  = '<link rel="stylesheet" href="../styleExcluir.css">';


criarHeader($css, $img);

criarMain($main);

criarFooter();
