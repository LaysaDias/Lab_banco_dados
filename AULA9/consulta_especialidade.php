<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Especialidade</title>
   
</head>
<body>
    <form action="" method="post">
        <h1>Especialidade Medica</h1>
        <table border="1" width="100%">
        <?php
            include('conexao.php');
            $query="Select *  from especialidade order by descricao";
            $resu=mysqli_query($con,$query) or die(mysql_connect_error());
            echo "<tr><td><b> Descrição               </td><td><b> Sigla </td></tr>";     
            while ($reg = mysqli_fetch_array($resu)){
                echo "<tr><td>" . $reg['descricao'] . "</td>"; 
                echo "<td>" . $reg['sigla'] . "</td>"; 
                echo "<td><a href='alterar_especialidade.php?id=". $reg['id'] . "'>Editar</a></td>"; 
                echo "<td><a href='excluir_especialidade.php?id=". $reg['id'] . "'>Excluir</a></td>"; 
            }
        ?>
        </table>
    </form>
    <?php
        mysqli_close($con);
    ?>
</body>
</html>