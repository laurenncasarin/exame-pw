<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>visualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <?php
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
    <div class="col-md-4 offset-4">
        <table class="table table-striped table-bordered rounded mt-3">
        <h3 class="mt-5 rounded text-dark text-center p-3" style="background-color:#B0E0E6;">Seus pacientes cadastrados:</h3>
            <?php
                include '../model/crudPaciente.php';
                $resultado = retornaResultados($_SESSION["idM"]);
                if(mysqli_num_rows($resultado) < 1)
                {
                    echo 
                    "
                        <h5 class='mt-5 text-center'>Você não cadastrou nenhum paciente!</h5>
                    ";
                }

                else
                {
                    echo
                    "
                        <thead>
                            <tr>
                                <th scope='col'>Nome</th>
                                <th scope='col'>Editar</th>              
                            </tr>
                        </thead>
                    ";

                    foreach($resultado as $linha)
                    {
                        echo
                        "
                            <tbody>
                                <tr>    
                                    <td>$linha[nomeP]</td>                   
                                    <td class='text-right'> <a href='../view/editarPaciente.php?idP=$linha[idP]'><button class='btn btn-success'>Editar</button></a></td>
                                </tr>
                            </tbody>
                        ";
                    }
                }
            ?>
        </table>
    </div>
    </script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>