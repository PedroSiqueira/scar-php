<?php

require "../../models/Microcontrolador.php";

$Microcontrolador = new Microcontrolador();


$nome = $_POST['campoNome'];
$descricao = $_POST['campoDescricao'];


$Microcontrolador->add($nome, $descricao);

header("Location: ../../views/Microcontrolador/");