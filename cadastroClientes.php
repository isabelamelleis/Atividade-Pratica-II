<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>
        Cadastro de clientes
    </h1>
    <form action="cadastroClientes.php" method="POST">
        <label for="nome-completo">Nome completo:</label>
        <br>
        <input type="text" placeholder="Digite" name="nome-cliente">
        <br>
        <br>
        <label for="cpf">CPF (apenas números):</label>
        <br>
        <input type="number" placeholder="Digite apenas os números" name="cpf-cliente">
        <br>
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" placeholder="Digite" name="email-cliente">
        <br>
        <br>
        <label for="telefone">Telefone:</label>
        <br>
        <input type="number" placeholder="Digite apenas os números" name="telefone-cliente">
        <br>
        <br>
        <button type="submit" name="cadastrar-cliente">
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

    if(isset($_POST['cadastrar-cliente'])) {

        $nome_completo = $_POST['nome-cliente'];
        $cpf_cliente = $_POST['cpf-cliente'];
        $email_cliente = $_POST['email-cliente'];
        $telefone_cliente = $_POST['telefone-cliente'];

        $sql_cadastro_cliente = "INSERT INTO cliente (nome_completo_cliente, cpf_cliente, email_cliente, telefone_cliente) VALUES ('$nome_completo', '$cpf_cliente', '$email_cliente', '$telefone_cliente')";

        if ($conn -> query ($sql_cadastro_cliente) === TRUE) {
            echo "<br>";
            echo "Cadastro de cliente realizado com sucesso.";
        } else {
            echo "<br>";
            echo "Erro ao cadastrar cliente: " . mysqli_error($conn);
        }
    }

?>