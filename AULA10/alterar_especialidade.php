<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Especialidade</title>
    
</head>
<body>
    <h1>Editar Especialidade Médica</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['atualizar'])){
        include('conexao.php');

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sigla = $_POST["sigla"];

        $query= "UPDATE especialidade SET descricao='$nome', sigla='$sigla' WHERE id=$id";

        $resu= mysqli_query($con, $query);

        if ($resu) {
            echo "Atualização realizada com sucesso";
        } else {
            echo "Erro ao atualizar dados: ". mysqli_error($con);
        }

        mysqli_close($con);
        header("Location: consulta_especialidade.php");
    }elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancelar'])){
        header("Location: consulta_especialidade.php");
    }
    ?>
    <?php
    if(isset($_GET['id'])){
        include('conexao.php');
        $id = $_GET['id'];

        $query= "SELECT * FROM especialidade WHERE id = $id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="">Descrição da Especialidade</label>
        <input type="text" name="nome" size="100" maxlength="100" required value="<?php echo $row['descricao']; ?>">
        <p><label for="">Sigla</label></p>
        <input type="text" name="sigla" size="3" maxlength="3" required value="<?php echo $row['sigla']; ?>">
        <p><input type="submit" name="atualizar" value="Atualizar"></p>
            <input type="submit" name="cancelar" value="Cancelar">
    </form>

    

    <?php
    
    ?>
    <button id="btnVoltar" onclick="window.location='consulta_especialidade.php'">Voltar</button>
</body>
</html>
