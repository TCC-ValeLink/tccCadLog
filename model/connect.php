<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'tcc3etim';

$connect = new mysqli($host, $user, $password);
$db_select = $connect->select_db($db);
?>
