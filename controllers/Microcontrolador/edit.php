<?php

require "../../models/Microcontrolador.php";

$Microcontrolador = new Microcontrolador();

$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$descricao = $_POST['campoDescricao'];




$Microcontrolador->edit($id,$nome, $descricao);

header("Location: ../../views/Microcontrolador/");