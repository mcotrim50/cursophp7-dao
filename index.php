<?php

require_once ("config.php");

$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios where idusuario = 21");

echo json_encode($usuarios);

?>