<?php

require "../../models/Permissoes.php";

$Permissoes = new Permissoes();

$id = $_POST['campoId'];
$id_usuario = $_POST['campoId_usuario'];
$id_microcontrolador = $_POST['campoId_microcontrolador'];
$impressao_digital = $_POST['campoImpressao_digital'];




$Permissoes->edit($id,$id_usuario, $id_microcontrolador, $impressao_digital);

header("Location: ../../views/Permissoes/");