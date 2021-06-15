<?php

require "../../models/Usuario.php";
require "../../mqtt/Publisher.php";

$usuario = new Usuario();

$identificador  = $_POST['campoIdentificador'];
$nome = $_POST['campoNome'];
$senha = $_POST['campoSenha'];

sendMQTT("usuario/adicionar", $identificador . "," . $senha);

$usuario->add($identificador, $nome, $senha);

header("Location: ../../views/Usuario/");
