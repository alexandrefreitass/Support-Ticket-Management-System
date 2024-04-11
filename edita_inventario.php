<?php 

include 'db.php';

$id_item = $_POST['id_item'];
$nome_item = $_POST['nome_item'];
$detalhes_item = $_POST['detalhes_item'];
$nserie_item = $_POST['nserie_item'];
$patrimonio_item = $_POST['patrimonio_item'];
$local_item = $_POST['local_item'];

$query = "UPDATE INVENTARIO SET nome_item='$nome_item', detalhes_item='$detalhes_item', 
    nserie_item='$nserie_item', patrimonio_item='$patrimonio_item', local_item='$local_item'
    WHERE id_item = $id_item";

mysqli_query($conexao, $query);

header('location:index.php?pagina=inventario');