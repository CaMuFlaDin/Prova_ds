<?php
    $id = "";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    include "conexao.php";
    $sql = "INSERT INTO usuarios_tb VALUES (?,?,?,?)";
    $enviar = $conectar->prepare($sql);
    $enviar->execute();
    
    echo "
        <script>
            alert('Cadastrado com sucesso!');
            window.location.replace('../');
        </script>
    ";