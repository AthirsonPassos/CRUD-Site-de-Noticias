<?php
    session_start();
    require("conexao.php");
    $titulo = $_POST['titulo'];

    /**Realizando a exclusão dos valores de acordo com o parâmeto passado*/
    $queryDeletar = "DELETE FROM tb_noticias WHERE nm_titulo = '$titulo'";
    echo "A noticia $titulo será excluida da lista";
    echo "<br/>";

    if (mysqli_query($link, $queryDeletar))
    {
        echo "<br />";
        echo "Noticia excluida com sucesso";
    }
    else
    {
        echo "Falha na exclusão!";

    }
    header('location:index.php');

?>