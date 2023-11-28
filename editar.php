<?php
include("config.php");

if(isset($_REQUEST['id'])){
    
    $id = $_REQUEST['id'];

    $sql_query = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql_query);

    $usuario = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="editar.css">
</head>

<nav>
    <a href="index.php">Lista de Usuarios</a>
    <a href="cadastro.php">Cadastrar usuario</a>
    <a href="sobrenos.html">Sobre nos</a>
</nav>

<!-- Conteúdo da Página -->
<div style="padding: 20px;">
    <!-- Conteúdo da página vai aqui -->
    <h2>Easy Company</h2>
    <p>Aqui voce pode cadastrar um novo usuario</p>
</div>

<body>
    <h1>Editar usuario</h1>

    <form action="editarController.php" method="POST">
        <div class="form">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $usuario['nomeusu']?>">
        </div>

        <div class="form">
            <label>e-mail</label>
            <input type="text" name="email" class="form-control" value="<?php echo $usuario['emailusu']?>">
        </div>

        <div class="form">
            <label>Data de Nascimento</label>
            <input type="date" name="dt_nascimento" class="form-control" value="<?php echo $usuario['dt_nascimento']?>">
        </div>

        <div class="form">
            <input type="hidden" name="id" value="<?php echo $id?>">
        </div>
        
        <div class="form"> 
            <button id="btn_enviar" type="submit" class="btn-primary" id="btn_enviar">Enviar</button>
        </div>

        <div class="form">
            <button id="btn_voltar" onclick="location.href='http://localhost/crudphpfacul/crudphp/'" type="button">Voltar</button>
        </div>
    </form>   

</body>


</body>



</html>