<?php

require "../../models/Acesso.php";

$Acesso = new Acesso();

$rs = $Acesso->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
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
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Entrada ou Saída</th>
                            <th scope="col"> Biometria ou Senha</th>
                            <th scope="col">Permissões</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($obj = $rs->fetch_object()) { ?>

                            <tr>
                                <th scope="row"><?php echo $obj->id; ?></th>
                                <td><?php echo $obj->horario; ?></td>
                                <td><?php echo $obj->entrada_ou_saida; ?></td>
                                <td><?php echo $obj->biometria_ou_senha; ?></td>
                                <td><?php echo $obj->id_permissoes; ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $obj->id; ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="#" onclick="excluir(<?php echo $obj->id; ?>)" class="btn btn-danger btn-sm">Apagar</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <a href="adicionar.php" class="btn btn-success">Adicionar</a>
            </div>

        </div>
    </div>
    </div>
    <?php include "../includes/js.php"; ?>

    <script> 
	function excluir(id) {
		if(confirm("Deseja excluir esse usuário")) {
			window.location.href = "../../controllers/Acesso/del.php?id=" + id; 
}
}
</script> 
    </body>

</html>