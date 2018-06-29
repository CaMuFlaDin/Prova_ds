<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Listagem de Usuários - Prova DS</title>
    </head>
    <body>
        <form method="POST" action="PHP/inserir.php">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
        <div>
            <a href="download.php">Download do Banco de Dados</a>
            <table border="1">
                <tr>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Senha</td>
                    <td>Ações</td>
                </tr>
                <?php
                    include "PHP/conexao.php";
                    $sql = "SELECT * FROM usuarios_tb";
                    $receber = $prova -> prepare($sql);
                    $receber -> execute();

                    foreach($receber as $listar){
                        $id = $listar['id'];
                        $nome = $listar['nome'];
                        $email = $listar['email'];
                        $senha = $listar['senha'];

                        echo "
                            <tr>
                                <td>$nome</td>
                                <td>$email</td>
                                <td>$senha</td>
                                <td>
                                    <a href='PHP/editar.php?id=$id'>Editar</a>
                                    <a href='PHP/excluir.php?id=$id'>Excluir</a>
                                </td>
                            </tr>
                        ";
                    }
                    $receber = null;
                ?>
            </table>
        </div>
    </body>
</html>