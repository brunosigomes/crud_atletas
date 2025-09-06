<?php
require '../config/db.php';

$stmt = $pdo->prepare("INSERT INTO atletas (nome_completo, apelido, data_nascimento, altura, peso, posicao, numero_camisa)
                       VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([
    $_POST['nome_completo'],
    $_POST['apelido'],
    $_POST['data_nascimento'],
    $_POST['altura'],
    $_POST['peso'],
    $_POST['posicao'],
    $_POST['numero_camisa']
]);

header("Location: index.php");
