<?php

require "../../models/Acesso.php";

$Acesso = new Acesso();

$id = $_GET['id']; 

$Acesso->del($id );

header("Location: ../../views/Acesso/");