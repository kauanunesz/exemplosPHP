<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora - 4 operações</h1>
    <form action="resultado.php" method="post" style="display: flex; flex-direction: column; gap: 5px;">
        <label for="n1">Digite o 1º Número: </label>
        <input type="number" name="n1" id="n1" style="width: 250px;"><br>
        <label for="n2">Digite o 2º Número: </label>
        <input type="number" name="n2" id="n2" style="width: 250px;">
        <button type="submit" style="width: 200px; height: 30px; border-radius: 8px;">Calcular</button>
    </form>
</body>
</html>