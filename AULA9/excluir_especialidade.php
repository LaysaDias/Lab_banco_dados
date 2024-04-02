<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Especialidade</title>
    
</head>
<body>
    <h1>Excluir Especialidade Médica</h1>
    <button id="btnVoltar" onclick="window.location='consulta_especialidade.php'">Voltar</button>
    
    <?php
    if(isset($_GET['id'])) {
        include('conexao.php');
        $id = $_GET['id'];

        $query = "SELECT * FROM especialidade WHERE id = $id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Descrição da Especialidade</th><th>Sigla</th></tr>";
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['descricao'] . "</td><td>" . $row['sigla'] . "</td></tr>";
            echo "</table>";
            echo "<p>Confirma a exclusão?</p>";
            echo "<form method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<div class='button-container'>";
            echo "<input type='submit' name='excluir' value='Excluir'>";
            echo "<input type='submit' name='cancelar' value='Cancelar'>";
            echo "</div></form>";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['excluir'])) {
            include('conexao.php');
            $id = $_POST['id'];

            // Exclui a especialidade
            $query_excluir = "DELETE FROM especialidade WHERE id = $id";
            if (mysqli_query($con, $query_excluir)) {
                echo "Especialidade excluída com sucesso.";
            } else {
                echo "Erro ao excluir especialidade: " . mysqli_error($con);
            }

            mysqli_close($con);
            exit;
        } elseif (isset($_POST['cancelar'])) {
            header("Location: consulta_especialidade.php");
            exit;
        }
    }
    ?>
</body>
</html>
