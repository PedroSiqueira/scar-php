<?php

require_once "Conexao.php";

class Acesso
{

    private $db;
    public $tabela = "acesso";

    function __construct()
    {
        $this->db = new Conexao();
    }

    public function listar()
    {
        $sql = "Select * from $this->tabela";
        return $this->db->executeSQL($sql);
    }


    public function add($horario , $entrada_ou_saida, $biometria_ou_senha, $id_permissoes )
    {
        $sql = "Insert into $this->tabela (horario, entrada_ou_saida, biometria_ou_senha, id_permissoes) 
        values ('$horario','$entrada_ou_saida', '$biometria_ou_senha', '$id_permissoes')";
        return $this->db->executeSQL($sql);
    }

//inicio id 
    public function listarPorId($id)
    {
        $sql = "Select * from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }

    public function edit($id, $horario , $entrada_ou_saida, $biometria_ou_senha, $id_permissoes)
    {
        $sql = "Update $this->tabela set horario='$horario', entrada_ou_saida='$entrada_ou_saida' ,  biometria_ou_senha='$biometria_ou_senha' , id_permissoes='$id_permissoes' where id = $id"; 
        return $this->db->executeSQL($sql);
    }

//fim id 

    public function del($id)
    {
        $sql = "Delete from $this->tabela where id = $id"; 
        return $this->db->executeSQL($sql);
    }
}