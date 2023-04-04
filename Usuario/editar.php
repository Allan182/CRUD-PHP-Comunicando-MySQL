<?php

require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';

$main = '<main>


<form action="../Classes/Usuario/UsuarioEditar.php" class="card" id="form" method="POST">
    <h2> Insira seus Dados </h2>

    <span>
        <label for="login"> Login: </label>
        <input class="normal" type="text" name="login" placeholder="Login" id="login" required />
    </span>

    <span>
        <label for="senhaConta"> Senha: </label>
        <input class="normal" type="text" name="senha" placeholder="Senha" id="senhaConta" required/>
    </span>

    <input type="submit" value="Editar"/>
</form>

</main>';

$css =  '<link rel="stylesheet" href="../styleLogin.css">';


criarHeader($css, $img);

criarMain($main);

criarFooter();
