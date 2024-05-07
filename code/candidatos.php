<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Todos os Participantes</title>
</head>

<body>
    <center class="py-1 py-md-5">
        <h2>Participantes do Vestibular</h2>
        <a class="btn btn-primary" href="home.php">Cadastrar</a>
    </center>
    <div class="row m-0 justify-content-center">
        <div class="col-6">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Participante</th>
                        <th scope="col">Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require('cadastro.php');
                        $cadastro = new Cadastro();
                        $cadastro->mostrar_candidatos();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>