<?php
session_start();
if(isset($_SESSION['login'])){

include 'db.php';

$id_item = $_GET['id_item'];

$query = "DELETE FROM INVENTARIO WHERE ID_ITEM = $id_item";

mysqli_query($conexao, $query);

header('location:index.php?pagina=inventario');

}else{
    header('location:index.php?pagina=inventario');
}
