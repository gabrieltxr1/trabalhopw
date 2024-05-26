<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Sistema de Gerenciamento de Ingressos</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Página Inicial</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=CadastroUsuario">Página de Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=ListarUsuario">Listagem de Shows</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=editar">Atualização de Shows</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "href="?page=excluir">Exclusão de Shows</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
      <div class="row">
        <div class="col mt-5">

 <?php
    include("conexao.php");

    switch(@$_REQUEST["page"]){
        case "CadastroUsuario" :
          include("cadastroUsuario.php");
          break;
        case "ListarUsuario" :
          include("listarUsuario.php");
          break;
          case "salvar" :
            include("salvar.php");
            break;
        case "editar" :
          include("atualizarUsuario.php");
          break;
        case "excluir" :
            include("salvar.php");
            break;
        
        default:
        echo "Sejam Bem-Vindos à Página Inicial!";

}
?>
  </div>
       </div>
              </div>

              <div class="btn">
                <a href="logout.php"><button>SAIR</button></a>
              </div>
  </body>
</html>