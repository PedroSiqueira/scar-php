<?php

require_once "Conexao.php";

class Microcontrolador
{

    private $db;
    public $tabela = "microcontrolador";

    function __construct()
    {
        $this->db = new Conexao();
    }

    public function listar()
    {
        $sql = "Select * from $this->tabela";
        return $this->db->executeSQL($sql);
    }


    public function add($nome, $descricao)
    {
        $sql = "Insert into $this->tabela (nome, descricao) 
        values ('$nome', '$descricao')";
        return $this->db->executeSQL($sql);
    }

//inicio id 
    public function listarPorId($id)
    {
        $sql = "Select * from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }

    public function edit($id, $nome, $descricao)
    {
        $sql = "Update $this->tabela set nome='$nome', descricao='$descricao' where id = $id"; 
        return $this->db->executeSQL($sql);
    }

//fim id 

    public function del($id)
    {
        $sql = "Delete from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }
}