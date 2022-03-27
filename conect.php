<?php
$hostname="localhost";
$bancodedados="cadastrobtc";
$usuario="root";
$senha="";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
echo "falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_errno;
}else{
echo "conectado com sucesso";
}
if($_POST){
$nome = $_POST['nomecompleto'];
$data = $_POST['datadenascimento'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$ie = $_POST['instituicaodeensino'];
$senha = $_POST['senha'];
$confsenha = $_POST['confirmasenha'];

$sql = "INSERT INTO cad (nome, datadenascimento, cpf_rg, email, curso, ie,senha,confirmasenha) VALUES ('$nome','$data','$cpf','$email','$curso','$ie','$senha','$confsenha')";
if(mysqli_query($mysqli, $sql)){
echo "elementos adicionados com sucesso!";
}else{
echo "erro ao adicionar elementos";
}
}
?>