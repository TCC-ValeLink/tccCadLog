<?php
session_start(); // Primeiro
include("../model/connect.php");

if (!isset($_COOKIE['idEmpresa'])) {
    die("Erro: Empresa não está logada.");
}

$cod_empresa = $_COOKIE['idEmpresa'];

if (isset($_POST['cod_envio_curriculo']) && isset($_POST['status_feedback'])) {
    $cod_envio_curriculo = mysqli_real_escape_string($connect, $_POST['cod_envio_curriculo']);
    $status_feedback = mysqli_real_escape_string($connect, $_POST['status_feedback']);

    $query_check = mysqli_query($connect, "SELECT * FROM envio_curriculo WHERE cod_envio_curriculo = '$cod_envio_curriculo'");

    if (mysqli_num_rows($query_check) > 0) {
        $query_feedback = "INSERT INTO feedback (cod_envio_curriculo, status_feedback) 
                           VALUES ('$cod_envio_curriculo', '$status_feedback')";

        if (mysqli_query($connect, $query_feedback)) {
            header("location:../view/perfilPrivEmp.php");
            exit; 
        } else {
            echo "Erro ao enviar feedback: " . mysqli_error($connect);
        }
    } else {
        echo "Erro: cod_envio_curriculo não encontrado.";
    }
} else {
    echo "Erro: cod_envio_curriculo ou status_feedback não encontrados.";
}

mysqli_close($connect);
?>
