<?php
    include "conexaoBD.php";
    
    function cadastrarMedico($nomeM, $senha1, $senha2, $cpf)
    {
        connect();
        $linhas=query("SELECT * FROM medico WHERE nomeM='$nomeM'");
        if( mysqli_num_rows($linhas) > 0) 
        {
            close();
            echo
            '
                <script>
                    alert("Usuário já cadastrado");
                    window.location.href = "../view/cadastroMedico.php";
                </script>
            ';
        }
        else if($senha1 != $senha2)
        {
            close();
            echo
            '
                <script>
                    alert("As senhas são diferentes");
                    window.location.href = "../view/cadastroMedico.php";
                </script>
            ';
        }

        else
        {
            query("INSERT INTO medico(nomeM, senha, cpf) VALUES('$nomeM', '$senha1', '$cpf')");
            close();
            echo
            '
                <script>
                    alert("Cadastro realizado!");
                    window.location.href = "../view/login.php";
                </script>
            ';
        }
    }

    function loginMedico($nomeM, $senha)
    {
        connect();
        $resultado=query("SELECT * FROM medico WHERE nomeM='$nomeM'");
        close();
        foreach($resultado as $linha);
        if($nomeM === $linha["nomeM"])
        {
            if($senha === $linha["senha"])
            {
                session_start();
                $_SESSION["idM"] = $linha["idM"];
                $_SESSION["nomeM"] = $linha["nomeM"];
                header("Location:../view/visualizar.php");
            }

            else
            {
                echo
                '
                    <script>
                        alert("Senha incorreta!");
                        window.location.href = "../view/login.php";
                    </script>
                ';
            }
        }

        else
        {
            echo
            '
                <script>
                    alert("Usuario não encontrado!");
                    window.location.href = "../view/login.php";
                </script>
            ';
        }

    }

?>