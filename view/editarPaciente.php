<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>editar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <?php
            include '../control/controlePaciente.php';
            session_start();
            if(!isset($_SESSION["idM"]))
            {
                echo
                '   
                    <script>
                        alert("É necessário estar logado!");
                        window.location.href = "../view/login.php";
                    </script>
                ';
            }
            
            $infoPaciente = retornaPaciente($_GET["idP"]);
            foreach($infoPaciente as $paciente);
        ?>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg" style="background-color:#E0FFFF;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="visualizar.php">Visualizar pacientes</a>
                    <a class="nav-link" href="../control/controleMedico.php?opcao=sair">Sair</a>                   
                </div>
            </div>
        </div>
        <li class="nav-item">
                <a><?php echo 'Você está logado como: ', $_SESSION["nomeM"], '!' ?></a>
        </li>
    </nav>
    <div class="col-md-4 offset-4 mt-5">
        <h3 class="mt-5 rounded text-dark text-center p-3" style="background-color:#B0E0E6;">Editar paciente:</h3>
        <form method="post" action="../control/controlePaciente.php">
            <input type="hidden" name="idP" value="<?php echo $paciente['idP']?>">
            <div class="mb-3 mt-5">
                <label for="nomeP" class="form-label">Nome do paciente:</label>
                <input type="text" class="form-control" id="nomeP" name="nomeP" value="<?php echo $paciente['nomeP']?>">
            </div>
            <button type="submit" class="btn btn-success" name="opcao" value="editar">Concluído</button>
        </form>
        <a href="../view/visualizar.php"><button class="btn btn-primary mt-3">Cancelar</button></a>
    </div>

    </script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    </body>
</html>