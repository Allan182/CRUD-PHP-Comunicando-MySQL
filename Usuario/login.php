<?php

require("config.php");

$css =  '<link rel="stylesheet" href="../styleLogin.css">';
$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$main = '
    <main>

        <form action="" class="card" id="form" method="POST">
            <h2> Insira Seus Dados </h2>
            
            <span>
                <label for="Login"> Login : </label>
                <input class="normal" name="login" type="text" placeholder="Login" id="Login" />
            </span>

            <span>
                <label for="Senha"> Senha: </label>
                <input class="normal" type="text" placeholder="Senha" id="Senha" name="senha" />
            </span>

            <input type="submit" value="Cadastrar" onclick="cadastrar()"/>

            <input type="submit" value="Efetuar Login" onclick="logar()"/>

        </form>

    </main>';

criarHeader($css, $img);

criarMain($main);

criarFooter();
