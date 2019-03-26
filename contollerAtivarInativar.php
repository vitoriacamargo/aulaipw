<?php
	include("Noticia.php");
	$listarNoticia = new Noticia();
	$id = filter_input(INPUT_GET, "id");
	$situacao= filter_input(INPUT_GET, "situacao");
	
	$listarNoticia->ativarInativar($id,$situacao);
	//receber os dados do formulario
	//invocar o método para alterar os dados
?>