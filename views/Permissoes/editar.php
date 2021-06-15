<?php 

if(!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

$id = $_GET['id']; 

require "../../models/Permissoes.php";
$Permissoes = new Permissoes();
$rs = $Permissoes->listarPorId($id); 
$obj = $rs->fetch_object(); 
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
                <h3>Editar Usuário</h3>
                <form method="post" action="../../controllers/Permissoes/edit.php">
                    <input type="hidden" name="campoId" value="<?php echo $obj->id; ?>">
                   
                   
                    <div class="form-group">
                        <label for="idId_usuario">Usuário:</label>
                        <input id="idId_usuario" class="form-control" type="text" name="campoId_usuario" required 
                        value="<?php echo $obj->id_usuario; ?>" placeholder="Informe...">
                    </div>

                    <div class="form-group">
                        <label for="idId_microcontrolador">Microcontrolador:</label>
                        <input id="idId_microcontrolador" class="form-control" type="text" name="campoId_microcontrolador" required 
                        value="<?php echo $obj->id_microcontrolador; ?>" placeholder="Informe...">  
                    </div>


                    <div class="form-group">
                        <label for="idImpressao_digital">Impressão Digital:</label>
                        <input id="idImpressao_digital" class="form-control" type="text" name="campoImpressao_digital" required maxlength="4" minlength="4"
                        value="<?php echo $obj->impressao_digital; ?>" placeholder="Informe...">
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