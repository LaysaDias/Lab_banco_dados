<!DOCTYPE html>
<html>
    <head>
        <meta charset  = "UTF-8">
        <title> Pesquisas de Pacientes </title>
</head>
<body>
    <h2>Pesquisa de Pacientes</h2><br>
    <form action="pesquisa_resultado.php" method="POST">
        <label>Nome: </label>
            <input type="text" name="nome" size="50">
        <label>CPF: </label>
            <input type="text" name="cpf" maxlength="11">
        <p><input type="submit" name="enviar" value="Enviar">
            <input type="reset" name="limpar" value="Limpar">
</form>
</body>
</html>