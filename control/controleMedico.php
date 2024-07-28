<?php
    include "../model/operacoesMedico.php";
    $opcao;
    if(isset($_POST["opcao"]))
        $opcao=$_POST["opcao"];

    else    
        $opcao=$_GET["opcao"];

    if(isset($_POST["nomeM"]))
        $nomeM=$_POST["nomeM"];

    if(isset($_POST["senha1"]))
        $senha1=sha1($_POST["senha1"]);

    if(isset($_POST["cpf"]))
        $cpf=$_POST["cpf"];

    if($opcao == "cadastrar")
    {
        $senha2=sha1($_POST["senha2"]);
        cadastrarMedico($nomeM, $senha1, $senha2, $cpf);
    }

    else if($opcao == "logar")   
        loginMedico($nomeM, $senha1);

    else if($opcao == "sair")
    {
        session_start();
        session_destroy();
        header("Location:../view/login.php");
    }
?>