<?php
	try{
		$prova = new PDO("mysql:host=localhost;dbname=prova_ds","root",""); //conexao com o banco de dados
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>