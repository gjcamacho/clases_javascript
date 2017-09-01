<?php

var_dump($_POST);

$variable="Esto es una cadena";

$entero=33;


$arreglo=array("Oswald", "Michel", "Javier", "Nohelya", "Edgar", "Rafa");

if(isset($_POST["nombre"])){
	$arreglo[]=$_POST["nombre"];
}

?>
<html>
	<head>
		<style>
			.disappear{
				display:none;
			}

			#elemento{
				color: blue;
			}

			div{
				color: #121212;
			}
		</style>
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

	<div id="elemento" class="">

	</div>

	<div id="elemento1" class="">
	</div>

	<div id="elemento2" class="">
	</div>

<script>
	var elem=$("#elemento1");

	elem.html("<i>Vene</i>");

	elem.fadeOut(3000);

	elem.fadeIn(3000);

	var new_elem=$("<div id='new_element'>Nuevo elemento</div>");

	elem.append(new_elem);

	console.log($("#new_element").parent().prev().fadeOut(1000));

	$("#new_element").load("students.php");

	$.ajax({
		url: "students_json.php"
	}).done(function(data){
		console.log(data);

		var students=JSON.parse(data);
		console.log(students);

		for(var i=0; i<students.length; i++){
			console.log(students[i]);

			var new_element=$("<div></div>");

			new_element.html(students[i]);

			$("#elemento2").append(new_element);
		}

		//$("#elemento2").html(data);
	});



	var name="";
	name="<?php echo 'Edgar';?>"

	var students='<?php echo json_encode($arreglo); ?>';

	var element=document.getElementById("elemento");
	element.innerHTML= "Hola: " + name;
	//element.className="disappear";
	element.className= element.className + " blink";
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
