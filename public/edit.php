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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Editar Atleta</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $atleta['id'] ?>">
        <div class="form-group">
            <label for="nome_completo">Nome completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" value="<?= htmlspecialchars($atleta['nome_completo']) ?>">
        </div>
        <div class="form-group">
            <label for="apelido">Apelido:</label>
            <input type="text" id="apelido" name="apelido" value="<?= htmlspecialchars($atleta['apelido']) ?>">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="<?= $atleta['data_nascimento'] ?>">
        </div>
        <div class="form-group">
            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" name="altura" value="<?= $atleta['altura'] ?>">
        </div>
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <input type="number" step="0.01" id="peso" name="peso" value="<?= $atleta['peso'] ?>">
        </div>
        <div class="form-group">
            <label for="posicao">Posição:</label>
            <input type="text" id="posicao" name="posicao" value="<?= htmlspecialchars($atleta['posicao']) ?>">
        </div>
        <div class="form-group">
            <label for="numero_camisa">Número da camisa:</label>
            <input type="number" id="numero_camisa" name="numero_camisa" value="<?= $atleta['numero_camisa'] ?>">
        </div>
        <button type="submit" class="button">Atualizar</button>
    </form>
</body>
</html>
