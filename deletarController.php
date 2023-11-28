<?php
include_once('config.php');

// Verifica se a variável 'id' está definida na requisição
if(isset($_REQUEST['id'])){
    
    // Obtém o valor da variável 'id' da requisição
    $id = $_REQUEST['id'];

    // Constrói a consulta SQL para excluir um usuário com o ID fornecido
    $sql_query = "DELETE FROM usuarios WHERE id=$id";

    // Executa a consulta SQL para excluir o usuário do banco de dados
    mysqli_query($conn, $sql_query);

    // Redireciona o usuário de volta para a página inicial (index.php) após a exclusão
    header("location: index.php");
}

?>
