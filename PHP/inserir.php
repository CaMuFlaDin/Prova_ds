<?php
    $id = "";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    include "conexao.php";
    $sql = "INSERT INTO usuarios_tb VALUES (?,?,?,?)";
    $enviar = $prova->prepare($sql);
    $enviar->execute(array($id, $nome, $email, $senha));
    $enviar = null;
    
    echo "
        <script>
            alert('Cadastrado com sucesso!');
            window.location.replace('../');
        </script>
    ";