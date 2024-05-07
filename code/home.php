<?php
require('classes.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro do Vestibular</title>
</head>

<body>
    <center class="py-1 py-md-5">
        <h2>Cadastro do Vestibular</h2>
        <a class="btn btn-danger" href="login.php">Logout</a>
    </center>
    <div class="py-4 py-md-5">
        <div class="row m-0 justify-content-center">
            <div class="col-4 py-4 bg-body-tertiary">
                <form class="row g-3" action="salvar_candidato.php" method="post">
                    <div class="col-md-6">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Curso</label>
                        <select name="cursos" class="form-select" required>
                            <option selected disabled value="">Selecione</option>
                            <option value="DSM">DSM</option>
                            <option value="GE">GE</option>
                        </select>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary" type="submit">cadastrar</button>
                        <a class="btn btn-warning" href="candidatos.php">Candidatos</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>