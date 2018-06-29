<?php
    $id = $_GET['id'];
    include "conexao.php";
    $sql = "DELETE FROM usuarios_tb WHERE id=?";
    $excluir = $prova->prepare($sql);
    $excluir->execute(array($id));
    
    $excluir = null;
    echo "
        <script>
            alert('Excluído com sucesso!');
            window.location.replace('../');
        </script>
    ";