<?php

require "../../models/Usuario.php";
require "../../models/Microcontrolador.php";

$Usuario = new Usuario();
$usuarios = $Usuario->listar();

$Microcontrolador = new Microcontrolador();
$microcontroladores = $Microcontrolador->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-3">
                <?php include "../includes/menu-lateral.php"; ?>

            </div>
            <div class="col-md-9">
                <h3>Permissões</h3>
                <form method="post" action="../../controllers/Permissoes/add.php">

                    <div class="form-group">
                        <label for="idId_usuario">Identificador:</label>
                        <select name="campoId_usuario" id="idId_usuario">
                            <?php while ($obj = $usuarios->fetch_object()) { ?>
                                <option value="<?php echo $obj->id; ?>"><?php echo $obj->identificador; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="idId_microcontrolador">Microcontrolador:</label>
                        <select name="campoId_microcontrolador" id="idId_microcontrolador">
                            <?php while ($obj = $microcontroladores->fetch_object()) { ?>
                                <option value="<?php echo $obj->id; ?>"><?php echo $obj->nome; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="idImpressao_digital">Impressao digital:</label>
                        <input id="idImpressao_digital" class="form-control" type="text" name="campoImpressao_digital" required maxlength="4" minlength="4" placeholder="Digite... ">
                    </div>
                    <button class="btn btn-success" type="submit">Gravar</button>
                </form>
            </div>

        </div>
    </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>