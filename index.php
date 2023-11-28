<?php
// Verifica se a requisição possui um parâmetro 'action' e se 'action' é igual a 'editar'
if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'editar'){
    // Obtém o valor do parâmetro 'id' da requisição
    $id = $_REQUEST['id'];
    // Redireciona para a página de edição com o ID do usuário
    header("location: editar.php?id=$id");
} 

// Verifica se a requisição possui um parâmetro 'action' e se 'action' é igual a 'deletar'
if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'deletar'){
    // Obtém o valor do parâmetro 'id' da requisição
    $id = $_REQUEST['id'];
    // Redireciona para o controlador de deleção com o ID do usuário
    header("location: deletarController.php?id=$id");
} 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="index.css">
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
    <p>Aqui voce pode ver os usuarios cadastrados</p>
    <p>Editar eles ou excluir-los, caso seja necessario</p>
</div>

<body>
    <!-- Tabela para exibir os usuários -->
    <table border="1" width="50%">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
        <?php
            // Inclui o arquivo de configuração
            include_once('config.php');
            
            // Consulta todos os usuários na tabela 'usuarios'
            $sql_query = "SELECT * FROM usuarios";
            $array_usu = $conn->query($sql_query);
            
            // Verifica se existem usuários cadastrados
            if($array_usu->num_rows > 0){
                // Itera sobre cada usuário e exibe na tabela
                foreach($array_usu as $usuario){
                    echo "<tr>";
                    echo    "<td>".$usuario['nomeusu']."</td>".
                            "<td>".$usuario['emailusu']."</td>".
                            "<td>".$usuario['dt_nascimento']."</td>".
                            // Links para editar e excluir cada usuário
                            "<td><center><a href=\"?action=editar&id=".$usuario['id']."\">[Alterar]</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"?action=deletar&id=".$usuario['id']."\">[Excluir]</a></center></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>

    <!-- Botão para adicionar um novo usuário -->
    <button onclick="location.href='http://localhost/crudphpfacul/crudphp/cadastro.php'" type="button">Adicionar Usuário</button>
</body>
</html>
