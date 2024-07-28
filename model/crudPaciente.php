<?php
    include 'conexaoBD.php';

    function retornaResultados($idM)
    {
        connect();
        $resultado = query("SELECT * from paciente WHERE paciente.idM = $idM");
        close();
        return $resultado;
    }

    function retornaPaciente($idP)
    {
        connect();
        $resultado=query("SELECT * from paciente WHERE paciente.idP = $idP");
        close();
        return $resultado;
    }

    function atualizaPaciente( $novoNome, $codPac)
    {
        connect();
        query("UPDATE paciente SET nomeP='$novoNome' WHERE idP=$codPac");
        close();
    }

?>