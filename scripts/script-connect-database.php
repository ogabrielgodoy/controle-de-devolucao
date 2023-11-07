<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fratelli_devolucao';

$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    die("Erro na conexão: " . mysqli_connect_error());
}
