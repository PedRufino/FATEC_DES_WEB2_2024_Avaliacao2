<?php
require('cadastro.php');
$cadastro = new Cadastro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name'])) {
        if ($_POST['cursos'] == 'DSM'){
            $cursos = 1;
        } else{
            $cursos = 2;
        }
        $cadastro->cadastrar_candidatos($_POST['name'], $cursos);
        header("Location: candidatos.php");
    }
}

?>