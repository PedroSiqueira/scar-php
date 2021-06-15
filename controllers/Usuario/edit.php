<?php

require "../../models/Usuario.php";

$Usuario = new Usuario();

$id = $_POST['campoId'];
$identificador = $_POST['campoIdentificador'];
$nome = $_POST['campoNome'];
$senha = $_POST['campoSenha'];

$Usuario->edit($id, $identificador, $nome, $senha);

header("Location: ../../views/Usuario/");