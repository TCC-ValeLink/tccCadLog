<?php 
    include("../model/connect.php");
    $TOMA = mysqli_query($connect, "SELECT CPF FROM usuario order by CPF ASC");
    mysqli_query($connect, "UPDATE usuario SET cidade = ".$_POST["CID"].", rua = ".$_POST["RUA"].", bairro ".$_POST["BAI"]. ", numero".$_POST["NUM"].", referencia_residencia = ".$_POST["REF"].", tempo_de_residencia = ".$_POST["TEM"]. ", valor_de_residencia = ".$_POST["VLR"].", tipo_de_residencia = ".$_POST["TPR"]."WHERE CPF = $TOMA");
    header("location:../view/cadastro3.php");
?>  