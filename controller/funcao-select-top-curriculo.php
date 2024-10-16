<?php
include("../model/connect.php");

$query($connect, "SELECT FROM curriculo INNER JOIN usuario ON cod_usuario.curriculo = cod_usuario.usuario WHERE '$_SESSION[idusuario]' = cod_usuario")




?>