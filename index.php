<?php

var_dump($_POST);

$variable="Esto es una cadena";

$entero=33;


$arreglo=array("Oswald", "Michel", "Javier", "Nohelya", "Edgar", "Rafa");

$arreglo[]=$_POST["nombre"];

?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
		
<?php

if($entero==32){
?>
	Hola!!!
<?php
}
else{
?>
	Saludos!!!
<?php
}
?>

<div id="elemento">
	</div>

<script>
	console.log($(this));
	var name="";
	name="<?php echo 'Edgar';?>"

	var students='<?php echo json_encode($arreglo); ?>';

	var element=document.getElementById("elemento");
	element.innerHTML=name;
</script>

<table>
<?php
foreach($arreglo as $student){
?>
	<tr>
		<td>
			<?php echo $student;?>
		</td>
	</tr>
<?php
}
?>
</table>



<form method="post" action="index.php">
	<input type="text" name="nombre" value="" placeholder="Nombre">
	<input type="text" name="apellido" value="" placeholder="Apellido">
	<input type="submit" name="Enviar" value="Enviar">
</form>


	</body>
</html>
