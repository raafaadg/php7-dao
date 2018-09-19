<?php

require_once("config.php");

$root = new Usuario();
$root->loadById(2);
echo $root;
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");


//echo json_encode($usuarios);

 ?>
