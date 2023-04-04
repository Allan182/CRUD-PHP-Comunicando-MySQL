<?php

require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>


<form action="../Classes/Contato/ContatoEditar.php" class="card" id="form" method="POST">
    <h2> Insira seus Dados </h2>

    <span>
        <label for="email"> Email: </label>
        <input class="normal" type="text" name="email" placeholder="Email" id="email" required />
    </span>

    <span>
        <label for="telefone"> Telefone: </label>
        <input class="normal" type="text" name="telefone" placeholder="Telefone" id="telefone" required/>
    </span>

    <input type="submit" value="Editar"/>
</form>

</main>';

$css =  '<link rel="stylesheet" href="../styleLogin.css">';


criarHeader($css, $img);

criarMain($main);

criarFooter();
