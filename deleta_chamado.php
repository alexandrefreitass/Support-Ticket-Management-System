<?php

include 'db.php';

$id_chamado = $_GET['id_chamado'];

$query = "DELETE FROM CHAMADOS WHERE ID_CHAMADO = $id_chamado";
$query2 = "ALTER TABLE CHAMADOS AUTO_INCREMENT=1";
$query3 = "SET @count = 0";
$query4 = "UPDATE CHAMADOS SET CHAMADOS.ID_CHAMADO = @count:= @count + 1";

mysqli_query($conexao, $query);
mysqli_query($conexao, $query2);
mysqli_query($conexao, $query3);
mysqli_query($conexao, $query4);

header('location:index.php?pagina=chamados');