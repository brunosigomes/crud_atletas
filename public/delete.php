<?php
require '../config/db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM atletas WHERE id = ?");
$stmt->execute([$id]);
header("Location: index.php");
