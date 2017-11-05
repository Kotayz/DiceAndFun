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
    $id = isset($_POST["id"]) ? $_POST["id"] : 0;
    $sql=mysqli_query($conexao,"SELECT * FROM ALUGUEL WHERE ID = '$id' ");
    $row = mysqli_fetch_assoc($sql);
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
            <form method="post" action="atualizarAluguel.php">
                <fieldset>
                    <legend>Consultar Cadastro de Aluguel</legend>
                    
                    <label>ID</label>
                    <input type="text" id="id" name="id" value="<?php echo $row["id"]; ?>" readonly />
                    
                    <label>ID Cliente</label>
                    <input type="number" id="idCliente" name="idCliente" value="<?php echo $row["idCliente"]; ?>" readonly/>

                    <label>ID Boardgame</label>
                    <input type="number" id="idBoardgame" name="idBoardgame" value="<?php echo $row["idBoardgame"]; ?>" readonly/>
                    
                    <label>ID Funcionario</label>
                    <input type="number" id="idFuncionario" name="idFuncionario" value="<?php echo $row["idFuncionario"]; ?>" readonly/>
                    
                    <label>Tempo Aluguel</label>
                    <input type="text" id="tempoAluguel" name="tempoAluguel" value="<?php echo $row["tempoAluguel"]; ?>" readonly/>
                </fieldset>                
            </form>
        </div>
    </body>
</html>
