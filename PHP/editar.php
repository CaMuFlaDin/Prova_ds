<?php
    $id   = $_GET['id'];
    include "PHP/conexao.php";
    $sql = "SELECT * FROM usuarios_tb WHERE id= $id";	// mostra valores da tebela serviços
    $receber = $prova -> prepare($sql);
    $receber -> execute();

    foreach($receber as $editar){

        if(isset($_POST['editar'])){
            $nome  = htmlspecialchars($_POST['nome']);			
            $email = htmlspecialchars($_POST['email']);
            $senha = htmlspecialchars($_POST['senha']);

            include "PHP/conexao.php"; //atualiza valores no banco
            $sql = "UPDATE usuarios_tb SET nome=?, email=?, senha=? WHERE id=$id";	
            $receber = $prova -> prepare($sql);
            $receber -> execute(array($nome,$email,$senha));
            echo "<script>
                alert('Editado com sucesso!');
                window.location.href = 'index.php';
              </script>";
            
            
        }
    }