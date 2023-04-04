<?php
/*    <span>
        <label for="cod"> Código: </label>
        <input class="normal" type="text" placeholder="Código" id="cod" name="codigo"/>
    </span> */
require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>
<form action="../Classes/Banco/BancoDeletar.php" class="card" id="form" method="POST">
     <h2> Deseja Realmente Excluir ? </h2> 

    <input type="submit" value="Excluir" />

</form>
</main>';

$css =  '<link rel="stylesheet" href="../styleLogin.css">';


criarHeader($css, $img);

criarMain($main);

criarFooter();
