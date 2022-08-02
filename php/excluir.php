<?php 

//Incluir a conexão
include("conexao.php");

//Obter dados
$obterDados = file_get_contents("php://input");

//Extrair od dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;


//SQL
$sql = "DELETE FROM curos WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);



?>