<?php

require_once "Conexao.php";

class Usuario
{

    private $db;
    public $tabela = "usuario";

    function __construct()
    {
        $this->db = new Conexao();
    }

    public function listar()
    {
        $sql = "Select * from $this->tabela";
        return $this->db->executeSQL($sql);
    }


    public function add($identificador, $nome, $senha )
    {
        $sql = "Insert into $this->tabela (identificador, nome, senha) 
        values ('$identificador', '$nome' , '$senha')";
        return $this->db->executeSQL($sql);
    }

    public function listarPorId($id)
    {
        $sql = "Select * from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }

    public function edit($id,$identificador, $nome, $senha )
    {
        $sql = "Update $this->tabela set identificador='$identificador' , nome='$nome', senha='$senha' where id = $id"; 
        return $this->db->executeSQL($sql);
    }

    public function del($id)
    {
        $sql = "Delete from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }
}