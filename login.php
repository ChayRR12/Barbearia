<?php
include('db.php'); // Inclua a conexão com o banco de dados

session_start(); // Inicia a sessão

$error = "";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o e-mail e a senha foram preenchidos
    if (empty($email)) {
        $error = "Preencha seu e-mail";
    } elseif (empty($senha)) {
        $error = "Preencha sua senha";
    } else {
        // Prepara a consulta para verificar o usuário
        $sql = "SELECT * FROM administrador WHERE email = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se o usuário foi encontrado
        if ($result->num_rows == 1) {
            $usuario = $result->fetch_assoc();

            // Inicia a sessão e redireciona para o painel
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            header("Location: telaAdm.php");
            exit();
        } else {
            $error = "E-mail ou senha incorretos";
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Fundo preto */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .container {
            background: #f2ac29; /* Fundo laranja */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Sombra mais suave */
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #000; /* Texto branco */
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        p {
            margin-bottom: 15px;
            color: #000000; 
        }

        label {
            font-size: 14px;
            color: #eee; /* Texto mais claro */
            margin-bottom: 5px;
            display: block;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid; /* Borda escura */
            border-radius: 4px;
            box-sizing: border-box;
            background-color: white; /* Fundo escuro dos inputs */
            color: #000000;  /* Texto branco nos inputs */
        }

        button {
            background-color: #f5680a; /* Botão laranja mais claro */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff6f00; /* Laranja escuro */
        }

        .error-box {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Acessar Agenda</h1>
        <form action="" method="POST">
            <p>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </p>
            <p>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
        </form>
        <?php
        if ($error) {
            echo "<div class='error-box'>$error</div>";
        }
        ?>
    </div>
</body>
</html>
