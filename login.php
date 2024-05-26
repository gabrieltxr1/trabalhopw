<!DOCTYPE html>
<html>
    <title>PÁGINA DE LOGIN</title>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="box">
        <form action="loginP.php" method="POST">
                <h2>ÁREA DE LOGIN</h2>
            <div class="inputBox">
                    <input type="text" required name = "nome">
                        <span for="">Nome</span>
                            <i></i>
            </div>
            <div class="inputBox">
                   <input type="password" required name ="senha">
                        <span for="">Senha</span>
                            <i></i>
            </div>
                            <button>Enviar</button>
            <div class="links">
                <a href="CadastroUsuario.php">Ainda não possui uma conta?</a>
            </div>
        </form>
    </div>
</body>
</html>