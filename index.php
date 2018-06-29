<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Listagem de Usuários - Prova DS</title>
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
        <div>
            <a href="download.php">Download do Banco de Dados</a>
            <table>
                <tr>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Senha</td>
                    <td>Ações</td>
                </tr>
                <?php
                    include "../PHP/conexao.php";
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
                                <td><a href='PHP/editar.php?id=$id'>Editar</a></td>
                                <td><a href='PHP/excluir.php?id=$id'>Excluir</a></td>
                            </tr>
                        ";
                    }
                ?>
            </table>
        </div>
    </body>
</html>