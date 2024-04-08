<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Medico</title>
    
</head>
<body>
<form action="" method="post">
        <h1>Médicos</h1>
        <table border="1" width="100%">
        <?php
            include('conexao.php');
            $query="Select * from medico order by nome";
            $resu=mysqli_query($con,$query) or die(mysql_connect_error());
            echo "<tr><td><b> Nome               </td><td><b> CRM </td></tr>";     
            while ($reg = mysqli_fetch_array($resu)){
                echo "<tr><td>" . $reg['nome'] . "</td>"; 
                echo "<td>" . $reg['CRM'] . "</td>"; 
                echo "<td><a href='alterar_medico.php?id=". $reg['id_medico'] . "'>Editar</a></td>"; 
                echo "<td><a href='excluir_medico.php?id=". $reg['id_medico'] . "'>Excluir</a></td>"; 
            }
        ?>
        </table>
    </form>
    <?php
        mysqli_close($con);
    ?>
    <button id="btnVoltar" onclick="window.location='home.php'">Voltar</button>
</body>
</html>