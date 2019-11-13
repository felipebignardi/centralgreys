<DOCTYPE html>
<html lang=en>
<head>
	<title>films</title>
	<meta charset="utf-8">
	
<b>Página 1</b> <br>

<table border="1">

<?php 

$nome=$_GET["nome"];

for ($i=0; $i<10; $i=$i+1){
	
echo "<tr>";

echo "<td>".$i."</td>";

echo "<td>Meu nome: ".$nome."</td>";

echo "<td>Olá Mundo!!!</td>";

echo "</tr>";
}

 ?>
 
 </table>