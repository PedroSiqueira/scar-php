<?php 

if(!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

$id = $_GET['id']; 

require "../../models/Usuario.php";
$Usuario = new Usuario();
$rs = $Usuario->listarPorId($id); 
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
                <form method="post" action="../../controllers/Usuario/edit.php">
                <input type="hidden" name="campoId" value="<?php echo $obj->id; ?>">
                    
                    
                    
                <div class="form-group">
                        <label for="idIdentificador">Identificador:</label>
                        <input id="idIdentificador" class="form-control" type="text" name="campoIdentificador" required 
                        value="<?php echo $obj->identificador; ?>" placeholder="Informe seu identificador">
                    </div>

                    <div class="form-group">
                        <label for="idNome">Nome:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required
                        value="<?php echo $obj->nome; ?>" placeholder="Informe seu nome">
                    </div>

                    <div class="form-group">
                        <label for="idSenha">Senha:</label>
                        <input id="idSenha" class="form-control" type="password" name="campoSenha" 
                        required maxlength="4" minlength="4" value= "<?php echo $obj->senha; ?>"
                            placeholder="Informe sua senha">
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