<?php
    $host="localhost";
    $user="id3480356_root";
    $password="123456";
    $banco="id3480356_unilasalle";
    $port="3306";
    $conexao=mysqli_connect($host,$user,$password,$port) or die(mysqli_error());
    mysqli_select_db($conexao,$banco) or die(mysqli_error());
?>
<?php
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $idade = isset($_POST["idade"]) ? $_POST["idade"] : 0;
    $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
    $rg = isset($_POST["rg"]) ? $_POST["rg"] : "";
    $endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : "";
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : 0;
    $cep = isset($_POST["cep"]) ? $_POST["cep"] : "";
    $telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "";
      
    $sql=mysqli_query($conexao,"INSERT INTO FUNCIONARIO(nome, idade, cpf, rg, endereco, numero, cep, telefone) values('$name', '$idade', '$cpf', '$rg', '$endereco', '$numero', '$cep', '$telefone')");
    if(!$sql) {
        die(mysqli_error($conexao));
    };
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Funcionário</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <ul>
            <li><a class="active" href="home.html">Home</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Boardgame</a>
              <div class="dropdown-content">
                <a href="cadBoardgame.html">Cadastrar</a>
                <a href="updBoardgame.html">Atualizar</a>
                <a href="srcBoardgame.html">Buscar</a>
                <a href="dltBoardgame.html">Deletar</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Funcionário</a>
              <div class="dropdown-content">
                <a href="cadFuncionario.html">Cadastrar</a>
                <a href="updFuncionario.html">Atualizar</a>
                <a href="srcFuncionario.html">Buscar</a>
                <a href="dltFuncionario.html">Deletar</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Cliente</a>
              <div class="dropdown-content">
                <a href="cadCliente.html">Cadastrar</a>
                <a href="updCliente.html">Atualizar</a>
                <a href="srcCliente.html">Buscar</a>
                <a href="dltCliente.html">Deletar</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Aluguel</a>
              <div class="dropdown-content">
                <a href="cadAluguel.html">Cadastrar</a>
                <a href="updAluguel.html">Atualizar</a>
                <a href="srcAluguel.html">Buscar</a>
                <a href="dltAluguel.html">Deletar</a>
              </div>
            </li>
        </ul>
        <div>
            <p>Funcionario Cadastrado</p>         
        </div>
    </body>
</html>