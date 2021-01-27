<?php
    session_start();
    include_once("conexao.php");

    if (!$link)
    {
        printf("Erro. Não é possivel connectar com o servidor loca (Localhost.: %s\n", mysqli_connect_error());
        exit();
    }

    $titulo = $_POST['titulo'];
    $slug = $_POST['slug'];
    $descricao = $_POST['descricao'];
    $palavrasChave = $_POST['palavrasChave'];
    $conteudo = $_POST['conteudo'];

    $insereDados ="INSERT INTO tb_noticias (id_noticias, nm_titulo, nm_slug, ds_noticia, nm_palavrasChave, ds_conteudo) VALUES ('null','$titulo','$slug','$descricao', '$palavrasChave','$conteudo')";
    $insereDados = mysqli_query($link, $insereDados);
    
    mysqli_close($link);
    header('location:index.php');


?>