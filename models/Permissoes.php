<?php

require_once "Conexao.php";

class Permissoes
{

    private $db;
    public $tabela = "permissoes";

    function __construct()
    {
        $this->db = new Conexao();
    }

    public function listar()
    {
        $sql = "Select * from $this->tabela";
        return $this->db->executeSQL($sql);
    }


    public function add($id_usuario , $id_microcontrolador, $impressao_digital )
    {
        $sql = "Insert into $this->tabela (id_usuario , id_microcontrolador,impressao_digital) 
        values ('$id_usuario ','$id_microcontrolador', '$impressao_digital')";
        return $this->db->executeSQL($sql);
    }

//inicio id 
    public function listarPorId($id)
    {
        $sql = "Select * from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }

    public function edit($id, $id_usuario , $id_microcontrolador, $impressao_digital)
    {
        $sql = "Update $this->tabela set id_usuario='$id_usuario', id_microcontrolador='$id_microcontrolador' ,  impressao_digital='$impressao_digital' where id = $id"; 
        return $this->db->executeSQL($sql);
    }

//fim id 

    public function del($id)
    {
        $sql = "Delete from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }
}