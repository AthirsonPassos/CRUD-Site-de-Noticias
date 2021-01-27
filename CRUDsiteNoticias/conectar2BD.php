<?php
    header("Content-Type: text/html; charset=ISO-8859-1", true);
    $erro = "Erro de conexão. Favor conferir os dados";
    $servidor = '127.0.0.1'; //Nome do Servidor = localhost (com aspas simples)
    $banco = 'db_noticias'; //Nome do BD que será aberto
    $usuario = 'root'; //Nome do usuario que tem acesso ao BD
    $senha = ""; //Senha do usuario: em braco (sem espaço)
    //1ro PASSO: Conectar ao Servidor
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    $link = mysqli_connect($servidor, $usuario, $senha, $banco) or print (mysql_error());
    

    if (!$link)
    {
        echo "Nao foi possivel estabelecer uma conexão com o MySQL";
        exit;
    }
    //Seleção do BD
    mysqli_select_db($link, "");
    if ($result = mysqli_query($link, "SELECT DATABASE()"))
    {
        $row = mysqli_fetch_row($result);
        mysqli_free_result($result);
    }
    mysqli_close($link);
?>
