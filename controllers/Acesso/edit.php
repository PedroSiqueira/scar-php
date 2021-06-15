<?php

require "../../models/Acesso.php";

$Acesso = new Acesso();

$id = $_POST['campoId'];
$horario = $_POST['campoHorario'];
$entrada_ou_saida = $_POST['campoEntrada_ou_saida'];
$biometria_ou_senha = $_POST['campoBiometria_ou_senha'];
$id_permissoes = $_POST['campoId_permissoes'];




$Acesso->edit($id, $horario, $entrada_ou_saida, $biometria_ou_senha, $id_permissoes);

header("Location: ../../views/Acesso/");