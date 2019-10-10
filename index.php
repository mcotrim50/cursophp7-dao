<?php

require_once ("config.php");

//$sql = new sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios where idusuario = 21");
//echo json_encode($usuarios); */

//============== Carrega um usuário =============================

//$root = new usuario();  
//$root->loadbyId(3);
//echo $root;*/

//================== Carrega uma lista de Usuários =================

//$lista = usuario::getList();
//echo json_encode($lista);

//===================== Carrega uma Lista de Usuários buscando pelo Login =====================

//$search = usuario::search("ro");
//echo json_encode($search);

//=================Carrega um usuario usando o Login e senha =============================

//$usuario = new usuario();
//$usuario->login("root","mamae0!");
//echo $usuario;

//=================Criando um novo usuario =============================

//$aluno = new usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("!@#$%&*0");
//$aluno->insert();
//echo $aluno;

$usuario = new usuario();
$usuario->loadbyId(26);
$usuario->update("professor","aleluia");
echo $usuario;



?>