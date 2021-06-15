<?php

require "../../models/Usuario.php";

$Usuario = new Usuario();

$identificador  = $_POST['campoIdentificador'];
$nome = $_POST['campoNome'];
$senha = $_POST['campoSenha'];

$Usuario->add($identificador , $nome , $senha,);

header("Location: ../../views/Usuario/");