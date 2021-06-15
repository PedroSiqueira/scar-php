<?php

require "../../models/Permissoes.php";

$Permissoes = new Permissoes();

$id = $_GET['id']; 

$Permissoes->del($id );

header("Location: ../../views/Permissoes/");