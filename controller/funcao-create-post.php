<?php
 include("../model/connect.php");
 if(!isset($_SESSION)){
    session_start();
 }
 
 $arquivo = $_FILES["arquivo"];
 $file_name = $_FILES['arquivo']['name'];
 $extensao = pathinfo($file_name, PATHINFO_EXTENSION);
 $nomeCompleto = md5(uniqid(pow(date("s"),date("m")))) . "." . $extensao;
 
 $destino = "../view/imgs/".$nomeCompleto;
 $destino2 = "../../apiVALELINK/post/imgs".$nomeCompleto;
 move_uploaded_file($arquivo['tmp_name'],$destino);
 move_uploaded_file($arquivo['tmp_name'],$destino2);
 $hora = date('H:i:s');
 $hoje = date('Y-m-d'); // Definindo a data de hoje
 $strD = str_replace('/', '', $hoje);
 $strH = str_replace(':','',$hora);
 
 
 mysqli_query($connect,"INSERT INTO post (cod_empresa,conteudo_post,midia_post, data_post, hora_post) VALUES ('".$_COOKIE['idEmpresa']."','".$_POST["conteudo-postagem"]."','".$nomeCompleto."','".$strD."','".$strH."')");
 
 header("location:../view/post.php");
 
 
?>