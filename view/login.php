<!doctype html>
<html lang="pt=br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-md-4 offset-4">
        <h1 class="mt-5 rounded text-dark text-center p-3" style="background-color:#B0E0E6;">Login</h1>
            <form class="mt-5" method="post" action="../control/controleMedico.php">
                <div class="mb-3">
                    <label for="nomeM" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nomeM" name="nomeM" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="senha1" class="form-label senha">Senha</label>
                    <input type="password" class="form-control" id="senha1" name="senha1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="mostrarSenha" onclick="alteraInput()">
                    <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
                </div>
                <button type="submit" class="btn btn-primary" name ="opcao" value="logar">Entrar</button>
            </form>
            <br>
            <h5>Ainda não tem uma conta?<h5>
            <a class="btn btn-success" href="cadastroMedico.php">Cadastre-se</a>
        </div>
        
    <script>
        function alteraInput()
        {
            var inputSenha = document.getElementById('senha1');
            if(inputSenha.type === 'password')
                inputSenha.setAttribute('type', 'text');

            else
                inputSenha.setAttribute('type', 'password');
        }
    </script>    
    </body>
</html>