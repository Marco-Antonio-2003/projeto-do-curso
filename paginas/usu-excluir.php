<?php
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Usuarios.php';
    $categoria = new Usuarios();
    $categoria->excluir($id_excluir);
    header('Location:gerenciar-usu.php');
?>