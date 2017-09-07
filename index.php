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
		<script src="js/jquery/jquery.min.js"></script>
		<script src="js/angular/angular.min.js"></script>


		<script>
			var app=angular.module("app", []);

			app.controller("AppController", function($scope){
				console.log("AppController initialized");

				var apellidoPaterno="Camacho";

				$scope.nombre="Juan";

				$scope.texto="texto insertado";

				$scope.arreglo=["String 1", "String 2", "String 3"];

				$scope.agregarAArreglo=function(){
					console.log("click!!!!!");

					$scope.arreglo.push($scope.cadenaAAgregar);
				};

				$scope.descargarDatos=function(){
					$http.get(dir, options).then(function(response) {
					}, function(errData){

					});
				}

			});

			app.controller("OtroController", function($scope){
				console.log("OtroController initialized");

				var apellidoPaterno="Gonzalez";
			});

			app.directive('test', function() {
			    var directive = {};

			    directive.restrict = 'E'; /* restrict this directive to elements */

				//directive.template = "Mi primer directiva: {{texto}}";

			    directive.compile=function(element, attributes){
			    	console.log("Compiling");
			    	console.log(element);
			    	console.log(attributes);

			    	var link=function($scope, element, attributes){
			    		console.log("Linking");
			    	};

			    	return link;
			    }

			    return directive;
			});
		</script>

	</head>
	<body ng-app="app">

		<div ng-controller="AppController">

			<test atributo="attr1">
				Hola
			</test>

			<div>Angular Examples</div>
			<input type="text" ng-model="nombre">
			Hola {{nombre}} como estas

			<ul>
				<li ng-repeat="string in arreglo">{{string}}</li>
			</ul>

			<input type="text" ng-model="cadenaAAgregar">
			<button class="button" ng-click="agregarAArreglo()">Boton a agregar</button>
		</div>

		<div ng-controller="OtroController">
		</div>



		<br>
		<br>
		<br>
		<br>
		<br>


		
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
