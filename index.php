<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jsCEP.js"></script>
    <title>Sistema de Cadastro</title>
</head>
<body>
<div class="container-fluid">
<h1 class="center">Cadastrar novo funcionário</h1>
<hr>
<a class="btn btn-secondary btConsultar" href="consultas.php">Consultar</a>

<div class="container-fluid formulario">
<form method="POST" action="teste.php">
<div class="form-group row">
<input id="nome" class="form-control col-sm-8" placeholder="Nome" name="Nome" type="text">
<input id="prof" name="Profissao" class="form-control col-sm-4" placeholder="Profissão" type="text">

<!-- Cep do funcionario -->

<input name="cep" class="form-control col-sm-8"  type="text" id="cep" placeholder=" Informe o CEP" 
value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
<button class="btn btn-secondary col-sm-4" type="button">Verificar CEP</button>
<input name="rua" class="form-control" type="text" placeholder="Rua" id="rua" size="60"/>
     
<input name="bairro" class="form-control" type="text" placeholder="Bairro" id="bairro" size="40" />
        
<input name="cidade" class="form-control" type="text" id="cidade" placeholder="Cidade" size="40"/>

<input name="uf" class="form-control" type="text" id="uf" placeholder="UF" size="2"/>
        
<input name="ibge" class="form-control" type="text" id="ibge" placeholder="IBGE" size="8"/>
 


<button class="btn btn-secondary btGravar" type="submit">Gravar</button>
</div>
</div>
</form>

</div>
</body>
</html>