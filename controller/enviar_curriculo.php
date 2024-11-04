<?php
include("../model/connect.php");
if (!isset($_SESSION)) {
    session_start();
}


if (!isset($_COOKIE['idUsuario'])) {
    die("Erro: Usuário não está logado.");
}

$cod_usuario = $_COOKIE['idUsuario'];
$cod_empresa = mysqli_real_escape_string($connect, $_POST['cod_empresa']);
$cod_vagas = mysqli_real_escape_string($connect, $_POST['cod_vagas']);


$query_curriculo = mysqli_query($connect, "SELECT cod_curriculo FROM curriculo WHERE cod_usuario = '$cod_usuario'");
if (mysqli_num_rows($query_curriculo) == 0) {
    die("Erro: Usuário não tem currículo cadastrado.");
}

$curriculo = mysqli_fetch_assoc($query_curriculo);
$cod_curriculo = $curriculo['cod_curriculo'];

$query_envio = "INSERT INTO envio_curriculo (cod_usuario, cod_curriculo, cod_empresa, cod_vagas) 
                VALUES ('$cod_usuario', '$cod_curriculo', '$cod_empresa', '$cod_vagas')";

if (mysqli_query($connect, $query_envio)) {
    echo "Currículo enviado com sucesso!";
    header("location:../view/home.php");
} else {
    echo "Erro ao enviar currículo: " . mysqli_error($connect);
}

?>
