<?php
include("../model/connect.php");

// Obtém o ID do usuário logado
$cod_usuario = $_COOKIE['idUsuario'];

$query = "SELECT * FROM usuario WHERE cod_usuario = ?";
$stmt = $connect->prepare($query);
$stmt->bind_param("i", $cod_usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["error" => "Usuário não encontrado."]);
}
?>