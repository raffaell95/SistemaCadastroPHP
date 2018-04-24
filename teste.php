<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Cadastro</title>
</head>
<body>
<div class="container-fluid">
<h1 class="center">Confirmação de cadastro</h1>
<hr><br>


    
<?php
require_once 'confirm.php';
require_once 'conexao.php';

$nome = $_POST['Nome'];
$profissao = $_POST['Profissao'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$ibge = $_POST['ibge'];


$teste = new confirm();
$teste->insert('funcionarios','nome=?, profissao=?, cep=?, rua=?, bairro=?, cidade=?, uf=?, ibge=?')
->run(["$nome","$profissao","$cep","$rua","$bairro","$cidade","$uf","$ibge"]);
echo '<center><h4>Cadastro realizado com sucesso!</center></h4><br>';
echo '<center><a class="btn btn-secondary btconfirm" href="consultas.php">Consultar</a></center>';

?>


</body>
</html>