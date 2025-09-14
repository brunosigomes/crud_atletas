<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Atleta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Cadastrar Novo Atleta</h1>
    <form action="store.php" method="POST">
        <div class="form-group">
            <label for="nome_completo">Nome completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" required>
        </div>
        <div class="form-group">
            <label for="apelido">Apelido:</label>
            <input type="text" id="apelido" name="apelido">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento">
        </div>
        <div class="form-group">
            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" name="altura">
        </div>
        <div class="form-group">
            <label for="peso">Peso (kg):</label>
            <input type="number" step="0.01" id="peso" name="peso">
        </div>
        <div class="form-group">
            <label for="posicao">Posição:</label>
            <input type="text" id="posicao" name="posicao">
        </div>
        <div class="form-group">
            <label for="numero_camisa">Número da camisa:</label>
            <input type="number" id="numero_camisa" name="numero_camisa">
        </div>
        <button type="submit" class="button">Salvar</button>
    </form>
</body>
</html>
