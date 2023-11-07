<?php
require_once('script-connect-database.php');
require_once('../functions/function-string-clean.php');

//Receber email e senha
$email = stringClean($_POST['inputEmail']);
$password = stringClean($_POST['inputPassword']);

//Verificar se tem no banco de dados
$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_senha = '$password' limit 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $date = mysqli_fetch_assoc($result);
    // Validado
    $_SESSION['user'] = array(
        "nome" => $date['user_nome'],
        "email" => $date['user_email'],
        "cargo" => $date['user_cargo']
    );
    header('location:../public/user/dashboard.php');
} else {
    // Não validado
    $_SESSION['notification'] = 'Email ou senha incorretos!';
    header('location:../public/user-form-login.php');
}
