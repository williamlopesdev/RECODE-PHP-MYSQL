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
        $nome_completo = $_POST['nome_completo'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $valor_unitario = $_POST['valor_unitario'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];
  
        $sql = "INSERT INTO pedidos VALUES (null, '$nome_completo', '$endereco', 
        '$telefone', '$produto', '$valor_unitario', '$quantidade', '$valor_total')";
        mysqli_query($connect, $sql);
    }

?>