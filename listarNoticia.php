<?php 
	include ("Noticia.php");
	$listarNoticia = new Noticia();
	$valor=$listarNoticia->buscarTodos();
?>
<table border="1">
 <th>Item</th>
 <th>Titulo</th>
 <th>Autor</th>
 <th>Ação</th> 
 <?php
 	foreach($valor as $linha){
 	?>
 <tr>
  <td><?php echo $linha["id"]; ?></td>
  <td><?php echo $linha["titulo"]; ?></td>
  <td><?php echo $linha["autor"]; ?></td>
  <td>[ALTERAR][INATIVAR]</td>
  </tr>
  <?php
  }
  ?>
  </table>