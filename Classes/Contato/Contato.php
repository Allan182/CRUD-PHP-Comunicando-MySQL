<?php

require('mysql.php');


class Contato
{
    private $telefone;
    private $email;
    private $codigo;

    public function __construct($telefone = null, $email = null, $codigo = null)
    {
        $this->telefone = $telefone;
        $this->email = $email;
        $this->codigo = $codigo;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }



    public function criar()
    {

        global $mysql;

        $resultado = $mysql->prepare("INSERT INTO `contato` (`cod`, `telefone`, `email`) VALUES (NULL, ?, ?);");
        $resultado->bind_param("ss", $this->telefone, $this->email);
        $resultado->execute();

        if ($resultado->affected_rows > 0) {
            $this->setCodigo($resultado->insert_id);
            return true;
        } else {

            return false;
        }
    }

    static function ler()
    {

        global $mysql;


        $resultado = $mysql->prepare("SELECT * FROM `contato`");
        $resultado->execute();
        $dados = $resultado->get_result();

        $dado = $dados->fetch_all(MYSQLI_ASSOC); //fech_num para receber os parametros em indices

        return $dado;
    }


    public function lerByID($codigo)
    {

        global $mysql;

        $resultado = $mysql->prepare("SELECT * FROM `contato` WHERE cod = ?");
        $resultado->bind_param("i", $codigo);
        $resultado->execute();
        $dados = $resultado->get_result();

        $dado = $dados->fetch_all(MYSQLI_ASSOC);



        $this->setEmail($dado[0]["email"]);
        $this->setTelefone($dado[0]["telefone"]);
        $this->setCodigo($dado[0]["cod"]);


        return $dado;
    }

    public function editar()
    {

        global $mysql;

        $codigo = $this->codigo;
        $telefone = $this->telefone;
        $email = $this->email;


        $resultado = $mysql->prepare("UPDATE `contato` SET `telefone` = ?, `email` = ? WHERE `contato`.`cod` = ?;");
        $resultado->bind_param("ssi", $telefone, $email, $codigo); //i representa uma variável inteira -> https://www.php.net/manual/en/mysqli-stmt.bind-param.php
        $resultado->execute();

        echo $resultado->affected_rows;

        if ($resultado->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletar()
    {

        global $mysql;


        $resultado = $mysql->prepare("DELETE FROM `contato` WHERE `contato`.`cod` = ?");
        $resultado->bind_param("i", $this->codigo); //i representa uma variável inteira -> https://www.php.net/manual/en/mysqli-stmt.bind-param.php
        $resultado->execute();

        if ($resultado->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
