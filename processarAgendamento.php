<?php
include 'db.php';

// Obtém os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$horario = $_POST['horario'];
$servico = $_POST['servico'];

// Insere os dados na tabela cliente
$sql = "INSERT INTO cliente (nome, telefone, horario, servico) VALUES ('$nome', '$telefone', '$horario', '$servico')";

if ($conn->query($sql) === TRUE) {
    echo "Novo agendamento criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
