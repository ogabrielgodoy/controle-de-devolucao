<?php 
require_once('script-connect-database.php');
require_once('../functions/function-string-clean.php');

//Receber email e senha
$email = stringClean($_POST['inputEmail']);
$password = stringClean($_POST['inputPassword']);

//Verificar se tem no banco de dados
$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_senha ='$password'";
mysqli_query($conn,$sql);
//Validado
//Não validado