<?php
    $host="localhost";
    $user="id3480356_root";
    $password="123456";
    $banco="id3480356_unilasalle";
    $conexao=mysqli_connect($host,$user,$password) or die(mysqli_error());
    mysqli_select_db($conexao,$banco) or die(mysql_error());
?>
<?php
    $idCliente = isset($_POST["idCliente"]) ? $_POST["idCliente"] : 0;
    $idBoardgame = isset($_POST["idBoardgame"]) ? $_POST["idBoardgame"] : 0;
    $idFuncionario = isset($_POST["idFuncionario"]) ? $_POST["idFuncionario"] : 0;
    $tempoAluguel = isset($_POST["tempoAluguel"]) ? $_POST["tempoAluguel"] : "";
      
    $sql=mysqli_query($conexao,"INSERT INTO ALUGUEL(idCliente, idBoardgame, idFuncionario, tempoAluguel) VALUES('$idCliente', '$idBoardgame', '$idFuncionario', '$tempoAluguel')");
    if(!$sql) {
        die(mysqli_error($conexao));
    };
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Aluguel</title>
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
            <p>Aluguel Cadastrado</p>         
        </div>
    </body>
</html>