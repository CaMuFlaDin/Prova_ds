<?php
    include "PHP/conexao.php";
    $sql = "SELECT * FROM usuarios_tb";
    $receber = $prova->prepare($sql);
    $receber->execute();
    
    if($receber->rowCount() >= 1){
        echo "id;nome;email;senha\n";
        foreach($receber as $listar){
            $id = $listar['id'];
            $nome = $listar['nome'];
            $email = $listar['email'];
            $senha = $listar['senha'];
            
            echo "$id;$nome;$email;$senha\n";
            
            header("Content-type: application/csv");
            header("Content-disposition: attachment; filename='Download.csv'");
        }
    }else{
        echo "
            <script>
                alert('Nenhum registro encontrado para download!');
                window.lcoation.replace('index.php');
            </script>
        ";
    }