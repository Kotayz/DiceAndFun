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
    $sql=mysqli_query($conexao,"SELECT * FROM FUNCIONARIO WHERE ID = '$id' ");
    $row = mysqli_fetch_assoc($sql);
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
            <form method="post" action="atualizarFuncionario.php">
                <fieldset>
                    <legend>Consultar Cadastro de Funcionários</legend>
                    
                    <label>ID</label>
                    <input type="text" id="id" name="id" value="<?php echo $row["id"]; ?>" readonly />
                    
                    <label>Nome</label>
                    <input type="text" id="name" name="name" value="<?php echo $row["nome"]; ?>" readonly/>

                    <label>Idade</label>
                    <input type="number" id="idade" name="idade" value="<?php echo $row["idade"]; ?>" readonly/>

                    <label>CPF</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo $row["cpf"]; ?>" readonly/>

                    <label>RG</label>
                    <input type="text" id="rg" name="rg" value="<?php echo $row["rg"]; ?>" readonly/>

                    <label>Endereço</label>
                    <input type="text" id="endereco" name="endereco" value="<?php echo $row["endereco"]; ?>" readonly/>

                    <label>Número</label>
                    <input type="number" id="numero" name="numero" value="<?php echo $row["numero"]; ?>" readonly/>
                    
                    <label>CEP</label>
                    <input type="text" id="cep" name="cep" value="<?php echo $row["cep"]; ?>" readonly/>
                    
                    <label>Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $row["telefone"]; ?>" readonly/>
                </fieldset>                
            </form>
        </div>
    </body>
</html>
