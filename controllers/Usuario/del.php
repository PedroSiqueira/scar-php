<?php

require "../../models/Usuario.php";

$Usuario = new Usuario();

$id = $_GET['id'];

$Usuario->del($id);

header("Location: ../../views/Usuario/");