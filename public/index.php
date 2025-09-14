<?php
require '../config/db.php';
$stmt = $pdo->query("SELECT * FROM atletas ORDER BY id DESC");
$atletas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Atletas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Lista de Atletas</h1>
    <a href="create.php" class="button">Novo Atleta</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Posição</th>
            <th>Numero Camisa</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($atletas as $a): ?>
        <tr>
            <td><?= $a['id'] ?></td>
            <td><?= htmlspecialchars($a['nome_completo']) ?></td>
            <td><?= htmlspecialchars($a['apelido']) ?></td>
            <td><?= htmlspecialchars($a['posicao']) ?></td>
            <td><?= htmlspecialchars($a['numero_camisa']) ?></td>
            <td><?= $a['altura'] ?> m</td>
            <td><?= $a['peso'] ?> kg</td>
            <td>
                <a href="edit.php?id=<?= $a['id'] ?>" class="button edit">Editar</a>
                <a href="delete.php?id=<?= $a['id'] ?>" class="button delete" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
