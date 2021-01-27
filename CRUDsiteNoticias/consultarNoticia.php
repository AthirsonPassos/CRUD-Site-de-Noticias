<?php
    /**Arquivo para conectar ao BD */
    require("conectar2BD.php");
    header("Content-Type: text/html; charset=ISO-8859-1", true);
    $erro = "Erro de conexão. Favor conferir os dados";
    $servidor = '127.0.0.1'; //Nome do Servidor = localhost (com aspas simples)
    $banco = 'db_noticias'; //Nome do BD que será aberto
    $usuario = 'root'; //Nome do usuario que tem acesso ao BD
    $senha = ""; //Senha do usuario: em braco (sem espaço)
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);

    echo "Resultados da consulta das noticias publicadas";

    $query = "SELECT * FROM tb_noticias";
    if ($result = mysqli_query($link, $query))
    {

        while ($row = mysqli_fetch_row($result))
        {
            echo "Cod.:"; echo $row[0];
            echo "<br />";
            echo "Titulo:"; echo $row[1];
            echo "<br />";
            echo "Slug:"; echo $row[2];
            echo "<br />";
            echo "Descricao"; echo $row[3];
            echo "<br />";
            echo "Palavras - Chave"; echo $row[4];
            echo "<br />";
            echo "Conteudo"; echo $row[5];
            echo "<br />";
            echo "<br />";
        }
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Athirson Passos">
        <title>Site para Cadastro de Noticas</title>

    </head>

<body>  
    <a class="navbar-brand" href="index.php">
               <h1>home</h1></a>

</body>
</html>