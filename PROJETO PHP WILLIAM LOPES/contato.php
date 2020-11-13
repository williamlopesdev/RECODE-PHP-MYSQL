<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mgeek";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn) {
            die ("A conexão ao BD falhou: " . mysqli_connect_error());
        }

        if(isset($_POST['nome']) && isset($_POST['msg'])){
            $nome = $_POST['nome'];
            $msg = $_POST['msg'];

            $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
            $result = $conn->query($sql);

        }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fale Conosco:</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body style="background: url('./Imagens/nerd.jpg') no-repeat; background-size: cover;">
      
        <!-- Inicio do Menu principal-->

    <?php

include('menu.html');

?>
<!-- Fim do Menu Principal-->

        

    <h2 style="color: #87CEEB; text-align: center;">Fale Conosco</h2>
    <hr>

    <table border=0 width="100%" celpadding="20">
        <tr>
            <td width="50%" align="center">
                <img src="./Imagens/email.png" width="65px">
                <p style="color: #87CEEB;">contato@geekmaster.com</p>
            </td>
            <td width="50%" align="center">
                <img src="./Imagens/whatsg.jpg" width="80px">
                <p style="color: #87CEEB;">11 99999-9999</p>
            </td>



        </tr>


    </table>
    <br>
    <br>

    <form method="post" action="" class="form1">
        <h3 style="color: #87CEEB;">Nome:</h3>
        <br><br>
        <input type="text" name="nome" style="width: 500px;">
        <br><br>
        <h3 style="color: #87CEEB;">Mensagem:</h3>
        <br><br>
        <textarea name="msg" style="width: 500px;"></textarea>
        <br><br>
        <input type="submit" value="Enviar">

    </form>
            
    <?php

        $sql = "select * from comentarios";
        $result = $conn->query($sql);

        if ($result->num_rows>0){
            while($rows = $result->fetch_assoc()) {
                
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";


            } 
            
        } else {
                echo "Nenhum nenhum comentário ainda!";
            }


    ?>
              

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