<?php

require("config.php");

$css =  '<link rel="stylesheet" href="../styleLogin.css">';
$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$main = '
    <main>

        <form action="" class="card" id="form" method="POST">
            <h2> Insira Seus Dados </h2>
            
            <span>
                <label for="telefone"> Telefone : </label>
                <input class="normal" name="telefone" type="text" placeholder="Telefone" id="telefone" />
            </span>

            <span>
                <label for="email"> Email : </label>
                <input class="normal" type="text" placeholder="E-Mail" id="email" name="email" />
            </span>

            <input type="submit" value="Cadastrar" onclick="cadastrar()"/>

            <input type="submit" value="Efetuar Login" onclick="logar()"/>

        </form>

    </main>';

criarHeader($css, $img);

criarMain($main);

criarFooter();
