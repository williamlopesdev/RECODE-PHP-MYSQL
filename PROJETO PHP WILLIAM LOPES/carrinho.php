<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "mgeek";

    //criando a   conexao
    $connect = mysqli_connect($servername, $username, $password, $database );  

    //verificando a conexao 
    if(!$connect){
    echo "Conexão não efetuada pelo motivo:" .mysqli_connect_error();
    }

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $valor_unitario = $_POST['valor_unitario'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];
  
        $sql = "INSERT INTO pedidos VALUES (null, '$nome', '$endereco', 
        '$telefone', '$produto', $valor_unitario, $quantidade, $valor_total)";
        mysqli_query($connect, $sql);
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body style="background: url('./Imagens/batman1.jpg') no-repeat; background-size: cover;">
      
        <!-- Inicio do Menu principal-->

    <?php

include('menu.html');

?>
<!-- Fim do Menu Principal-->

        

    <h1 style="color: #87CEEB; text-align: center; padding: 5%;">Pedidos</h1>
   

   


    </table>
    <br>
    <br>

    <form method="POST" action="carrinho.php" class="form1">
             Nome:<br>
            <input type="text" name="nome" id="nome" style="width: 500px;"><br><br>
            Endereço:<br>
            <input type="text" name="endereco" id="endereco" style="width: 500px;"><br><br>
            Telefone:<br>
            <input type="tel" name="telefone" id="telefone" style="width: 500px;"><br><br>
            Produto:<br>
            <input type="text" name="produto" id="produto" style="width: 500px;"><br><br>
            Quantidade:<br>
            <input type="text" name="quantidade" id="quantidade" style="width: 500px;"><br><br>
            Valor:<br>
            <input type="text" name="valor_unitario" id="valor_unitario" style="width: 500px;"><br><br>
            Total:<br>
            <input type="text" name="valor_total" id="valor_total" style="width: 500px;"><br><br>
            <br>
            <button type="submit" name="cadastrar">Cadastrar</button>
            <br>
    </form>
            
    
              

    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    


    <center>
        <span>
                <p id="formas_de_pagamento"><strong>Formas de Pagamento</strong></p>
            <img src="./Imagens/formasde.png" width="300" alt="Formas de Pagamento">
        </span>
    </center>

<center><p style="color: white;">&copy; Geek Master</p></center>
</body>


</head>



</html>