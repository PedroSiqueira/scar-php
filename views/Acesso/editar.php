<?php 

if(!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

$id = $_GET['id']; 

require "../../models/Acesso.php";
$Acesso = new Acesso();
$rs = $Acesso->listarPorId($id); 
$obj = $rs->fetch_object(); 

require "../../models/Permissoes.php";

$Permissoes = new Permissoes();

$rs = $Permissoes->listar();
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
                <h3>Acesso</h3>
                <form method="post" action="../../controllers/Acesso/edit.php">
                    <input type="hidden" name="campoId" value="<?php echo $obj->id; ?>">
                   
                   
                   
                    <div class="form-group">
                        <label for="idHorario">Horário:</label>
                        <input id="idHorario" class="form-control" type="text" name="campoHorario" required 
                        value="<?php echo $obj->horario; ?>" 
                        placeholder="Informe...">
                    </div>

                    <div class="form-group">
                        <p>Entrada ou saída:</p>
                        <input type="radio" id="entrada" name="campoEntrada_ou_saida" value="1"> 
                        <label for="entrada">Entrada</label><br>
                        <input type="radio" id="saida" name="campoEntrada_ou_saida" value="0"> 
                        <label for="saida">Saída</label><br>
                    </div>
<br>

                    <div class="form-group">
                        <p>Biometria ou Senha:</p>
                        <input type="radio" id="biometria" name="campoBiometria_ou_senha" value="1"> 
                        <label for="biometria">Biometria</label><br>
                        <input type="radio" id="senha" name="campoBiometria_ou_senha" value="0"> 
                        <label for="senha">Senha</label><br>
                    </div>
                 

                    <div class="form-group">
                        <label for="idId_permissoes">Permissões:</label>
                        <select name="campoId_permissoes" id="idId_permissoes">
                            <?php while ($obj = $rs->fetch_object()) { ?>
                                <option value="<?php echo $obj->id; ?>"><?php echo $obj->id; ?></option>
                            <?php } ?>
                        </select>
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