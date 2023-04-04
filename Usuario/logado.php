<?php

require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>

<form action="" class="card" id="form">

    <h2> Selecione uma Opção </h2>

    <input type="submit" value="Listar Dados" onclick="listar()" />

    <input type="submit" value="Editar Dados" onclick="editar()" />

    <input type="submit" value="Excluir Dados" onclick="excluir()" />

</form>

</main>';

$css =  '<link rel="stylesheet" href="../styleLogado.css">';

criarHeader($css, $img);

criarMain($main);

criarFooter();
