<?php
require '../config/db.php';

$stmt = $pdo->prepare("UPDATE atletas
                       SET nome_completo=?, apelido=?, data_nascimento=?, altura=?, peso=?, posicao=?, numero_camisa=?
                       WHERE id=?");
$stmt->execute([
    $_POST['nome_completo'],
    $_POST['apelido'],
    $_POST['data_nascimento'],
    $_POST['altura'],
    $_POST['peso'],
    $_POST['posicao'],
    $_POST['numero_camisa'],
    $_POST['id']
]);

header("Location: index.php");
