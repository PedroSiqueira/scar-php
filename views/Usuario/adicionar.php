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
                <h3>Adicionar Usuário</h3>
                <form method="post" action="../../controllers/Usuario/add.php">


                <div class="form-group">
                        <label for="idIdentificador">Identificador:</label>
                        <input id="idIdentificador" class="form-control" type="text" name="campoIdentificador" required
                            placeholder="Informe seu identificador">
                    </div>

                    <div class="form-group">
                        <label for="idNome">Nome:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required
                            placeholder="Informe seu nome">
                    </div>

                    <div class="form-group">
                        <label for="idSenha">Senha:</label>
                        <input id="idSenha" class="form-control" type="password" name="campoSenha" required
                            maxlength="4" minlength="4" placeholder="Informe sua senha">
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