<?php
include_once('config.php');
$info = [];

// Recebendo o valor do id da URL
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE `ID-CLIENTE` = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: listagem.php");
        exit;
    }
} else {
    header("Location: listagem.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'nomeUsuario');
    $email = filter_input(INPUT_POST, 'emailUsuario', FILTER_SANITIZE_EMAIL);
    $id = filter_input(INPUT_POST, 'id');

    if ($name && $email && $id) {
        $sql = $pdo->prepare('UPDATE cadastro SET NOMES = :name, EMAIL = :email WHERE `ID-CLIENTE` = :id');
        $sql->bindValue(':email', $email);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: painelControle.php");
        exit;
    } else {
        $errorMessage = 'Não foi possível editar o usuário.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Editar Cadastro</h1>

    <?php if (isset($errorMessage)): ?>
        <div class="error"><?php echo $errorMessage; ?></div>
    <?php endif; ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>">
        <input type="hidden" name="id" value="<?php echo $info['ID-CLIENTE']; ?>">
        
        <label for="nomeUsuario">Nome:</label>
        <input type="text" id="nomeUsuario" name="nomeUsuario" value="<?php echo htmlspecialchars($info['NOMES']); ?>" required>
        
        <label for="emailUsuario">Email:</label>
        <input type="email" id="emailUsuario" name="emailUsuario" value="<?php echo htmlspecialchars($info['EMAIL']); ?>" required>
        
        <input type="submit" value="Salvar">
    </form>
</div>

</body>
</html>
