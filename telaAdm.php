<?php
include 'db.php';

// Excluir cliente
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM cliente WHERE id = $id");
    header("Location: telaAdm.php");
}

// Atualizar cliente
if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];
    $servico = $_POST['servico'];
    $conn->query("UPDATE cliente SET nome = '$nome', telefone = '$telefone', horario = '$horario', servico = '$servico' WHERE id = $id");
    header("Location: telaAdm.php");
}

// Adicionar cliente
if (isset($_POST['add'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];
    $servico = $_POST['servico'];
    $conn->query("INSERT INTO cliente (nome, telefone, horario, servico) VALUES ('$nome', '$telefone', '$horario', '$servico')");
    header("Location: telaAdm.php");
}

// Consultar clientes
$result = $conn->query("SELECT * FROM cliente");

// Verificar se há um cliente para editar
$editClient = null;
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $editResult = $conn->query("SELECT * FROM cliente WHERE id = $id");
    $editClient = $editResult->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Clientes</title>
    <link rel="stylesheet" href="src/css/telaAdm.css">
    <style>
        .back-btn {
            background-color: #f5680a; /* Cor de fundo */
            border: none; /* Sem borda */
            padding: 10px 20px; /* Espaçamento interno */
            color: #fff; /* Cor do texto */
            cursor: pointer; /* Muda o cursor ao passar o mouse */
            border-radius: 16px; /* Bordas arredondadas */
            text-decoration: none; /* Remove sublinhado do link */
            display: inline-block; /* Para permitir padding e margin */
            font-weight: bold; /* Para texto em negrito */
        }

        .back-btn:hover {
            background-color: #d45b08; /* Cor de fundo ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Botão de Voltar para o index -->
        <a href="index.php" class="back-btn">Voltar</a>
        
        <h1>Gerenciamento de Clientes</h1>
        
        <!-- Formulário para adicionar cliente -->
        <form action="telaAdm.php" method="POST" class="form">
            <h2>Adicionar Novo Cliente</h2>
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <input type="datetime-local" name="horario" placeholder="Horário" required>
            <select id="servico" name="servico" required>
                <option value="corte">Corte</option>
                <option value="barba">Barba</option>
                <option value="sobrancelha">Sobrancelha</option>
                <option value="depilacao_cera">Depilação com cera</option>
            </select>
            <button type="submit" name="add">Adicionar</button>
        </form>

        <!-- Formulário de edição de cliente, se um cliente estiver sendo editado -->
        <?php if ($editClient): ?>
        <form action="telaAdm.php" method="POST" class="form">
            <h2>Editar Cliente</h2>
            <input type="hidden" name="id" value="<?php echo $editClient['id']; ?>">
            <input type="text" name="nome" value="<?php echo $editClient['nome']; ?>" required>
            <input type="text" name="telefone" value="<?php echo $editClient['telefone']; ?>" required>
            <input type="datetime-local" name="horario" value="<?php echo $editClient['horario']; ?>" required>
            <input type="text" name="servico" value="<?php echo $editClient['servico']; ?>" required>
            <button type="submit" name="update">Atualizar</button>
            <a href="telaAdm.php" class="cancel-btn">Cancelar</a>
        </form>
        <?php endif; ?>

    

        <!-- Tabela de clientes -->
        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Horário</th>
                    <th>Serviço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['telefone']; ?></td>
                    <td><?php echo $row['horario']; ?></td>
                    <td><?php echo $row['servico']; ?></td>
                    <td>
                        <a href="telaAdm.php?edit=<?php echo $row['id']; ?>" class="edit-btn">Editar</a>
                        <a href="telaAdm.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php $conn->close(); ?>
