<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>

</head>
<body>
    <h1>Cadastro de Paciente</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('conexao.php');
 
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $telefone = $_POST["telefone"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];

        $query = "INSERT INTO paciente (nome, endereco, numero, complemento, bairro, cidade, estado, cpf, rg, telefone, celular, email) 
        VALUES ('$nome', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cpf', '$rg', '$telefone', '$celular', '$email')";
 
         
        if (mysqli_query($con, $query)) {
              echo "Paciente cadastrado com sucesso!";
        } else {
              echo "Erro ao cadastrar paciente: " . mysqli_error($con);
        }
   
        mysqli_close($con);
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
 
        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco" required><br>

        <label for="numero">Número:</label><br>
        <input type="text" id="numero" name="numero"><br>

        <label for="complemento">Complemento:</label><br>
        <input type="text" id="complemento" name="complemento" required><br>
 
        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro"><br>
 
        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade" required><br>
 
        <label for="estado">Estado:</label><br>
        <select id="estado" name="estado" required>
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" maxlength="11"  pattern="\d{11}" required><br>
 
        <label for="rg">RG:</label><br>
        <input type="text" id="rg" name="rg"  maxlength="9" pattern="\d{9}" required><br>
 
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" maxlength="15"  placeholder="(XX)XXXXX-XXXX" required><br>

        <label for="celular">Celular:</label><br>
        <input type="text" id="celular" name="celular" maxlength="15"  placeholder="(XX)XXXXX-XXXX" required><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" maxlength="100" required><br>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
</form>
</body>
</html>