<?php

require "../../models/Microcontrolador.php";

$Microcontrolador = new Microcontrolador();

$id = $_GET['id']; 

$Microcontrolador->del($id );

header("Location: ../../views/Microcontrolador/");