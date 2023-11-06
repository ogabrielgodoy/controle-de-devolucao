<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fratelli_devolucao';

$sql = mysqli_connect($hostname,$username,$password,$dbname);

if(!$sql){
    die("Erro na conexão: " . mysqli_connect_error());
}
