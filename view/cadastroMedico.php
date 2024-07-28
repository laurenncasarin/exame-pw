<!doctype html>
<html lang="pt=br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-md-4 offset-4">
            <h1 class="mt-5 rounded text-dark text-center p-3" style="background-color:#B0E0E6;">Cadastre-se</h1>
            <form class="mt-5" method="post" action="../control/controleMedico.php">
                <div class="mb-3">
                    <label for="nomeM" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nomeM" name="nomeM" placeholder="Ex: Maria da Silva" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Ex: 000.000.000-00"required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control senha" id="senha1" name="senha1"placeholder="Escolha uma senha"required>
                </div>
                <div class="mb-3">
                    <label for="senha2" class="form-label">Repita sua senha</label>
                    <input type="password" class="form-control senha" id="senha2" name="senha2"placeholder="Digite novamente sua senha"required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="mostrarSenha" onclick="alteraInput()">
                    <label class="form-check-label" for="mostrarSenha">Mostrar senha</label>
                </div>
                <button type="submit" class="btn btn-success" name="opcao" value="cadastrar">Cadastrar-se</button>
            </form>
            <br>
            <a class="btn btn-secondary" href="login.php">Voltar</a>
        </div>
        <script>
            function alteraInput() 
            {
                var inputsSenha = document.querySelectorAll('.senha');
                inputsSenha.forEach(function(inputSenha) 
                {
                    if(inputSenha.type === 'password')
                        inputSenha.type = 'text';

                    else
                        inputSenha.type = 'password';
                });
            }

        var inputTamanho = document.getElementById('cpf');
        inputTamanho.addEventListener('input', (event) => {
            var inputValue = inputTamanho.value.replace(/\D/g, '');
            var formattedValue = '';

            for (var i = 0; i < inputValue.length && i < 11; i++) {
                formattedValue += inputValue[i];
                if (i === 2 || i === 5) {
                    formattedValue += '.';
                } else if (i === 8) {
                    formattedValue += '-';
                }
            }

            inputTamanho.value = formattedValue;
        });

    </script>
    </body>
</html>