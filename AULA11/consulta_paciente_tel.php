<?php
    include_once("conexao.php");
    $sql = "SELECT * from paciente";
    $resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");
    
    echo "<h1><p align='center'> Consulta de Paciente </h1>";
    while ($registro = mysqli_fetch_array($resultado)){
        $id_paciente = $registro['id'];
        echo "Paciente: ".$registro['nome']." CPF: ".$registro['cpf']." RG: ".$registrp['rg']."<br>";
        echo "Endereço: ".$registro['enderco']. " - ".$registro['numero']. " - Bairro: ".$registro['bairro'];
        echo "- Cidade: ".$registro['cidade']."/".$registro['estado']."<br>";

        $sql2 = "SELECT numero, id_paciente from telefone WHERE id_paciente = 'id_paciente'";
        $resu2 
    }