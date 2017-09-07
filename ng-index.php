
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

			});

			app.controller("OtroController", function($scope, $http){
				console.log("OtroController initialized");

				var apellidoPaterno="Gonzalez";

				$scope.students=[];

				$scope.descargarDatos=function(){
					console.log("click!!");

					$http.get("students_json.php").then(
						function(response){
							console.log("RESPUESTA!!!! =)");
							console.log(response.data);

							$scope.students=response.data;
						},
						function(errData){
							console.log("ERROR!!!!!! =(");
							console.log(errData);
						}

					);
				};
			});

			app.directive('test', function() {
			    var directive = {};

			    directive.restrict = 'E';

			    directive.replace=false;

				directive.template = "<div>Mi primer directiva: {{texto}}</div>";

			    return directive;
			});

			app.directive('titulo', function() {
			    var directive = {};

			    directive.restrict = 'A';

			    directive.replace=false;

				directive.template = "<h1>{{texto}}</h1>";

				directive.compile=function(element, attributes){
					console.log("Compiling");

					console.log(element);
					console.log(attributes);

					var link=function($scope, element, attributes){
						console.log("Linkin");

						console.log(element);
						console.log(attributes);
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

			<div class="pull-right" titulo>
				hola 2
			</div>


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
			<table>
				<thead>
					<tr>
						<th>Estudiante</th>
						<th>Apellido</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="student in students">
						<td ng-repeat="element in student">{{element}}</td>
					</tr>
				</tbody>
			</table>

			<button ng-click="descargarDatos()">Descargar</button>
		</div>


	</body>
</html>
