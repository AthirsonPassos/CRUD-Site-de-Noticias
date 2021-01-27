<?php
    /**Arquivo para conectar ao BD */

    header("Content-Type: text/html; charset=ISO-8859-1", true);
    $erro = "Erro de conexão. Favor conferir os dados";
    $servidor = '127.0.0.1'; //Nome do Servidor = localhost (com aspas simples)
    $banco = 'db_noticias'; //Nome do BD que será aberto
    $usuario = "root"; //Nome do usuario que tem acesso ao BD
    $senha = ""; //Senha do usuario: em braco (sem espaço)
    $link = mysqli_connect($servidor, $usuario, $senha, $banco) or print (mysql_error());

 ?>