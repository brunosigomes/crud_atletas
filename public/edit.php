<?php
require '../config/db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM atletas WHERE id = ?");
$stmt->execute([$id]);
$atleta = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Atleta</title>
</head>
<body>
    <h1>Editar Atleta</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $atleta['id'] ?>">
        Nome completo: <input type="text" name="nome_completo" value="<?= htmlspecialchars($atleta['nome_completo']) ?>"><br>
        Apelido: <input type="text" name="apelido" value="<?= htmlspecialchars($atleta['apelido']) ?>"><br>
        Data de nascimento: <input type="date" name="data_nascimento" value="<?= $atleta['data_nascimento'] ?>"><br>
        Altura (m): <input type="number" step="0.01" name="altura" value="<?= $atleta['altura'] ?>"><br>
        Peso (kg): <input type="number" step="0.01" name="peso" value="<?= $atleta['peso'] ?>"><br>
        Posição: <input type="text" name="posicao" value="<?= htmlspecialchars($atleta['posicao']) ?>"><br>
        Número da camisa: <input type="number" name="numero_camisa" value="<?= $atleta['numero_camisa'] ?>"><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
