<?php
include_once('config.php');
$lista = [];
$sql = $pdo->query('SELECT * FROM cadastro');

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a {
            color: #007BFF;
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .no-data {
            text-align: center;
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Painel de Controle</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($lista) > 0): ?>
                    <?php foreach ($lista as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['ID-CLIENTE']; ?></td>
                            <td><?php echo $usuario['NOMES']; ?></td>
                            <td><?php echo $usuario['EMAIL']; ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $usuario['ID-CLIENTE']; ?>">Editar</a>
                                <a href="excluir.php?id=<?php echo $usuario['ID-CLIENTE']; ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="no-data">Nenhum dado encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>