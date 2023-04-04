

<?php


require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>

<form action="login.php" class="card">

    <h1 class="cadastrado"> 404 Error! </h1>

     <input type="submit" value="Voltar" color="red"> 

</form>

</main>';


$css =  '<link rel="stylesheet" href="../styleCadastro.css">';

criarHeader($css, $img);

criarMain($main);

criarFooter();
