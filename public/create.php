<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Atleta</title>
</head>
<body>
    <h1>Cadastrar Novo Atleta</h1>
    <form action="store.php" method="POST">
        Nome completo: <input type="text" name="nome_completo" required><br>
        Apelido: <input type="text" name="apelido"><br>
        Data de nascimento: <input type="date" name="data_nascimento"><br>
        Altura (m): <input type="number" step="0.01" name="altura"><br>
        Peso (kg): <input type="number" step="0.01" name="peso"><br>
        Posição: <input type="text" name="posicao"><br>
        Número da camisa: <input type="number" name="numero_camisa"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
