<?php
	try{
		$estoque = new PDO("mysql:host=localhost;dbname=limop369_estoques","limop369_estoque","senai28645"); //conexao com o banco de dados
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>