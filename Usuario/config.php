<?php


function criarMain($main)
{
    echo $main;
}


function criarFooter()
{

    echo $footer = ' <footer>

    <div class="box-footer">
        <p class="copyrigth"> &copy; Copyrigth Allanzin Banks &copy;</p>
    </div>

</footer>

<script src="../scriptUser.js"></script>

</body>

</html>';
}



function criarListar()
{
    echo $footer = ' 
        </p>
    
        <input type="submit" value="Voltar">
    </form>
    
    </main>
        
        <footer>
    
        <div class="box-footer">
            <p class="copyrigth"> &copy; Copyrigth Allanzin Banks &copy;</p>
        </div>
    
    </footer>
    
    <script src="../scriptUser.js"></script>
    
    </body>
    
    </html>';
};


function criarHeader($css, $img)
{
    echo $header = '<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Banco do Allanzin </title>' . $css . '
        <link rel="icon" href="../img/ico.ico" type="image/x-icon">
    </head>
    
    <body>
    
        <header>' .
        $img .

        '<h1 class="login-titulo"> Allanzin Banks </h1>
    
            <ul class="menu">
                <a href="../Banco/login.php" class="conteudo-menu"> Banco </a>
                <a href="../Usuario/login.php" class="conteudo-menu"> Usuario </a>
                <a href="../Contato/login.php" class="conteudo-menu"> Contato </a>
            </ul>
    
        </header>';
}
