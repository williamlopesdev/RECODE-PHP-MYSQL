<?php

    $servername = "3.21.185.4";
    $username   = "william";
    $password   = "s*M@f*NqHJaG";
    $database   = "loja";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn) {
            die ("A conexão ao BD falhou: " . mysqli_connect_error());
        }

   
    
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/exibircategorias.js"></script>

</head>
<body style="background: url('./Imagens/liga2.jpg') no-repeat; background-size: cover;">

 <!-- Inicio do Menu principal-->

    <?php

        include('menu.html');

    ?>
<!-- Fim do Menu Principal-->


    <h1 class="titulo" style="color: #7b68ee;">Produtos</h1>
    <hr>


    <div class="container-categoria">
        <h3>Categoria:</h3>
            <ul>
                <li class="categoria" onclick="exibir_todos()">todos(5)</li>
                <li class="categoria" onclick="exibir_categoria('action_figures')">Actions Figures(3)</li>
                <li class="categoria" onclick="exibir_categoria('canecas')">Canecas(1)</li>
                <li class="categoria" onclick="exibir_categoria('relogios')">Relógios(1)</li>
            </ul>
    </div>
                            
        

                   
    <div class="container-produto">

        <?php

            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if ($result->num_rows>0){
                while($rows = $result->fetch_assoc()) {
                    

        ?>
        
            <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">
                <div class="imagem"><img src="<?php echo $rows["imagem"]; ?>" width="200px" onclick="destaque(this)"></div>
                <br>
                <div class="descricao"><?php echo $rows["descricao"]; ?></div>
                <div class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></div><br>
                <div class="preco">R$ <?php echo $rows["preco_venda"]; ?></div><br>    
            </div>    


        <?php   
                } 
                
            } else {
                    echo "Nenhum produto cadastrado!";
                }


        ?>

    </div>               

                           
            
                    <br><br><br>

    <center>
        <span>
            <p id="formas_de_pagamento"><strong>Formas de Pagamento</strong></p>
            <img src="./Imagens/formasde.png" width="300" alt="Formas de Pagamento">
        </span>
    </center>


    <center><p style="color: white;">&copy; Geek Master</p></center></body>
</html>






    </body>

</head>



</html>
