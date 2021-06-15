<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Scar</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-3">
                <nav class="bg-dark menu-lateral">
                    <h3 class="text-center"> Admin </h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <h3> Cadastro de Usuário </h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                <h3> Cadastro de Usuários</h3>
                <form method="get" action="">
                    <div class="form-group">
                        <label for="my-input">Text</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Text</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>

                    <div class="form-group">
                        <label for="my-input">Text</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <button class="btn btn-success" type="button">Text</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>