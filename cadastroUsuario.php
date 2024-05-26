<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Seja Bem-Vindo à Página de Cadastro!</h1>
    
<form action="?page=salvar" method="POST">
    <div class="mb-3">
        <input type="hidden" name="acao" value="CadastroUsuario">
        <label>Nome: </label>
        <input type="text" name="nome" required class="form control">
    </div>
    <div class="mb-3">
        <label>Idade : </label>
        <input type="int" name="idade" required class="form control">
    </div>
    <div class="mb-3">
        <label>E-mail : </label>
        <input type="email" name="email" required class="form control">
    </div>
    <div class="mb-3">
        <label>Contato : </label>
        <input type="text" name="contato" required class="form control">
    </div>
    <div class="mb-3">
        <label>CPF : </label>
        <input type="text" name="cpf" required class="form control">
    </div>
    <div class="mb-3">
        <label>Senha : </label>
        <input type="password" name="senha" required class="form control">
    </div>
        <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </form>
</body>
</html>