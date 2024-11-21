<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionários</title>
</head>
<body>
    <h1>
        Cadastro de funcionário
    </h1>
    <form action="cadastroFuncionarios.php" method="POST">
        <label for="nome-completo">Nome completo:</label>
        <br>
        <input type="text" placeholder="Digite" name="nome-funcionario">
        <br>
        <br>
        <label for="cpf">CPF (apenas números):</label>
        <br>
        <input type="number" placeholder="Digite apenas os números" name="cpf-funcionario">
        <br>
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" placeholder="Digite" name="email-funcionario">
        <br>
        <br>
        <label for="telefone">Telefone:</label>
        <br>
        <input type="number" placeholder="Digite apenas os números" name="telefone-funcionario">
        <br>
        <br>
        <button type="submit" name="cadastrar-funcionario">
            Cadastrar
        </button>
    </form>
    <br>
    <a href="index.php">
        <button>
            Voltar para lista de solicitações
        </button>
    </a>
    <br>
</body>
</html>

<?php

    include 'db_connect.php';

    if(isset($_POST['cadastrar-funcionario'])) {

        $nome_completo = $_POST['nome-funcionario'];
        $cpf_funcionario = $_POST['cpf-funcionario'];
        $email_funcionario = $_POST['email-funcionario'];
        $telefone_funcionario = $_POST['telefone-funcionario'];

        $sql_cadastro_funcionario = "INSERT INTO funcionario (nome_funcionario, cpf_funcionario, email_funcionario, telefone_funcionario) VALUES ('$nome_completo', '$cpf_funcionario', '$email_funcionario', '$telefone_funcionario')";

        if ($conn -> query ($sql_cadastro_funcionario) === TRUE) {
            echo "<br>";
            echo "Cadastro de funcionário realizado com sucesso.";
        } else {
            echo "<br>";
            echo "Erro ao cadastrar funcionário: " . mysqli_error($conn);
        }
    }

?>