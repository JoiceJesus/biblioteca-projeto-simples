<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
    body {
    background-color:beige;
    }
    .cad {
    background-color:white;
    height:400px ;
    width:800px;
    position:relative;
    margin-top:150px;
    margin-left:290px;
    }
    .cad label{
    margin-left:30px;
    }
    .cad input {
    background-color:wheat;
    height:30px ;
    width:200px;
    border-color:wheat;
    border-radius:5px;
    border-style: none;
    }
    .cad #btn {
    cursor: pointer;
    }
    .cad a{
    color: wheat;
    text-decoration: none;
    margin-left:30px;
    margin-top:10px;
    }
    </style>
</head>
<body>
<div class="cad">
<br>
<center><h2>Cadastro de novo usuario</h2></center>
<br>
<form method="post" action="conect.php">
<label for="nomecompleto">Nome: </label><input name="nomecompleto" type="text">
<label for="datadenascimento">Data de Nascimento: </label><input name="datadenascimento" type="date"><br><br>
<label for="cpf">Cpf/Rg: </label><input name="cpf" type="text">
<label for="email">E-mail: </label><input name="email" type="email"><br><br>
<label for="curso">Curso: </label><input name="curso" type="text">
<label for="instituicaodeensino">Instituicao de Ensino: </label><input name="instituicaodeensino" type="text"><br><br>
<label for="senha">Senha: </label><input name="senha" type="password">
<label for="confirmasenha">Comfirma Senha: </label><input name="confirmasenha" type="password"><br><br><br>
<center><input id="btn" name="btn" type="submit" value="Enviar"></center>
</form>
<br>
<a href="">Login</a> <a href="">Home</a>
</div>
</body>
</html>

<?php
include("conect.php");
?>