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
                <h3>Descrição</h3>
                <form method="post" action="../../controllers/Microcontrolador/add.php">

                    <div class="form-group">
                        <label for="idNome">Nome:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required
                            placeholder="Informe seu nome">
                    </div>

                    <div class="form-group">
                        <label for="idDescricao">Descrição:</label>
                        <input id="idDescricao" class="form-control" type="text" name="campoDescricao" required
                            placeholder="Informe o seu lab">
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