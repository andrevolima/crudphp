<?php
include_once('config.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['dt_nascimento']) && isset($_POST['id'])){

    $id = $_POST['id'];

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $dt_nascimento = filter_input(INPUT_POST, 'dt_nascimento', FILTER_SANITIZE_STRING);

    $sql_query = "UPDATE usuarios SET nomeusu = '$nome', emailusu = '$email', dt_nascimento = '$dt_nascimento' WHERE id = '$id'";
    mysqli_query($conn, $sql_query);
    
    header("location: index.php");
}

?>