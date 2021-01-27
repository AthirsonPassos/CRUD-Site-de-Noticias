<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Athirson Passos">
        <title>Site para Cadastro de Noticas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>

<body>
<?php
    session_start();
    include_once("conexao.php");
?>
<h1 class="display-1">Publique aqui suas noticias</h1>
<form class="row g-3" action="cadastrar_noticias.php" method="post" >
  <div class="col-md-6">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="titulo">
  </div>

  <div class="col-md-6">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug" id="slug">
  </div>

  <div class="col-12">
    <label for="descricao" class="form-label">Descricao</label>
    <input type="text" class="form-control" name="descricao" id="descricao">
  </div>

  <div class="col-12">
    <label for="palavrasChave" class="form-label">Palavras - Chave</label>
    <input type="text" class="form-control" name="palavrasChave" id="palavrasChave">
  </div>

  <div class="col-md-6">
    <label for="conteudo" class="form-label">Conteudo</label>
    <input type="text" class="form-control" name="conteudo" id="conteudo">
  </div>


  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" value="Cadastrar">Publicar</button>
    <button type="reset" class="btn btn-primary">Limpar todos os campos</button>
  </div>
</form>

    <!--Consulta de Noticias-->
    <h1> Consultar noticias publicadas</h1>
    <br>
    <form action="consultarNoticia.php" method="post" name="db_noticias" id="db_noticias">
    <button type="submit" name="botao-pesquisar" class="btn btn-primary" > <h3>Listar todos os alunos no BD</h3></button> </form>

    <!--Exclusão de Noticias--> 
    <h1> Exclua aqui noticias velhas</h1>
    <form action="excluirNoticia.php" method="post" name="db_noticias" id="db_noticias">
    <label for="titulo">Nome:</label>
    <input type="text" name="titulo" id="titulo"> <br> <br>
    <br>
    <input type="submit" value="Excluir Dados do Aluno BD" class="btn btn-primary" ></button>
    <input type="reset" value="Limpar todos os campos" class="btn btn-primary" ></button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>