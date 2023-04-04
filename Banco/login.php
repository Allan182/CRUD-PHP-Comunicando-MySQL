<?php

require("config.php");

$img = '<img src="../img/logo-login-bradesco.jpg" alt="Logo do Banco do Brasil" />';
$main = '<main> <form action="" class="card" id="form" method="POST"> <h2> Insira seus Dados </h2> <span> <label for="agencia"> Agência: </label><input class="normal" type="text" name="agencia" placeholder="Agência" id="agencia" /></span><span> <label for="contaCorrente"> Conta: </label><input class="normal" type="text" name="conta" placeholder="Conta Corrente" id="contaCorrente" /></span><span><label for="senhaConta"> Senha: </label> <input class="normal" type="text" name="senha" placeholder="Senha" id="senhaConta" /></span><input type="submit" value="Cadastrar" onclick="cadastrar()" /><input type="submit" value="Efetuar Login" onclick="logar()" /></form></main>';
$css =  '<link rel="stylesheet" href="../styleLogin.css">';


criarHeader($css, $img);

criarMain($main);

criarFooter();
