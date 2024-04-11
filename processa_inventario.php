<?php

include 'db.php';

$nome_item = $_POST['nome_item'];
$detalhes_item = $_POST['detalhes_item'];
$nserie_item = $_POST['nserie_item'];
$patrimonio_item = $_POST['patrimonio_item'];
$local_item = $_POST['local_item'];

$query = "INSERT INTO INVENTARIO(nome_item, detalhes_item, nserie_item, patrimonio_item,  local_item) 
VALUES('$nome_item', '$detalhes_item', '$nserie_item', '$patrimonio_item', '$local_item')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=inventario');