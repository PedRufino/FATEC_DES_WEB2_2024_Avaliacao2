<?php
session_start();
require_once('dados_banco.php');

class Cadastro
{
    private $conexao;

    public function __construct()
    {
        global $servername, $dbname, $username, $password;
        try {
            $this->conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Não foi possível conectar-se ao banco: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->conexao = null;
    }

    public function cadastrar_candidatos($nome, $curso)
    {
        try {
            $sql = "INSERT INTO candidatos (nome, curso) VALUES ('$nome', $curso)";
            $this->conexao->exec($sql);
            echo "Candidato cadastrado com sucesso!";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function mostrar_candidatos()
    {
        try {
            $sql = "SELECT id, nome, curso FROM candidatos";
            $result = $this->conexao->query($sql);
    
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $curso = ($row['curso'] == 1) ? "DSM" : "GE";
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nome']}</td>
                        <td>$curso</td>
                    </tr>
                    ";
                }
            } else {
                echo "Nenhum candidato encontrado.";
            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
