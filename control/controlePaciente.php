 <?php
    include '../model/crudPaciente.php';
    $opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : null;
    

    if($opcao == 'editar')
    {
        $nomeP=$_POST["nomeP"];
        $idP=$_POST["idP"];
        atualizaPaciente($nomeP, $idP);
        header("Location:../view/visualizar.php");
    }
 ?>