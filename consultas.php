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
<h1 class="center">Consultar funcionários</h1>
<hr>
<a class="btn btn-secondary btNovo" href="index.php">Novo</a>



<div class="container-fluid formulario">
<form action="" method="GET">

<input id="pesq" class="form-control col-sm-6" placeholder="Filtrar funcionários" type="text" name="formFiltro">
<input class="btn btn-secondary btPesquisar" type="submit" value="Pesquisar">
</form>

<?php

require_once 'confirm.php';
$filtroA = isset($_GET['formFiltro'])?$_GET['formFiltro']:"";
$teste = new confirm();
foreach ($teste->select('*','funcionarios')->run() as $registros):
    print'<pre><br>';
    print('<b>Nome:</b> '.$registros[1].'<br>');
    print('<b>Profissão:</b> '.$registros[2].'<br>');
    print('<b>CEP:</b> '.$registros[3].'<br>');
    print('<b>Bairro:</b> '.$registros[4].'<br>');
    print('<b>Cidade:</b> '.$registros[5].'<br>');
    print('<b>UF:</b> '.$registros[6].'<br>');
    print('<b>IBGE:</b> '.$registros[7]);
    print'</pre>';
endforeach;
?>


</div>
</div>
</body>
</html>
