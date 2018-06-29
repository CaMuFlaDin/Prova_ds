<?PHP include "PHP/editar.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Prova - DS</title>
    </head>
    <body>
        <h1>Prova - DS</h1>
        <form method="POST" action="PHP/editar.php">
            <p>Nome:</p>
            <input type="text" name="nome" value="<?php echo $editar['nome'];?>" required>
            <p>E-mail:</p>
            <input type="email" name="email" value="<?php echo $editar['email'];?>" required>
            <p>Senha:</p>
            <input type="password" name="senha" value="<?php echo $editar['senha'];?>" required>
            <input type="submit" name="editar">
        </form>
    </body>
</html>