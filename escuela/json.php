<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Obtener JSON con AJAX</title>
</head>

<body>
<h1>Datos para enviar a PHP</h1>

<input type="text" id="nombre" placeholder="Nombre" accept="text/plain"><br><br>
<input type="text" id="apellido" placeholder="Apellido" accept="text/plain"><br><br>
<input type="number" id="edad" placeholder="Edad" accept="text/plain">

<button class="enviar"></button>
<hr>
<div class="respuesta"></div>

<script src="assets/js/jquery-2.1.0.js"></script>
<script>
$(".enviar").click(function(e) {
	e.preventDefault();
	var nombre = $("#nombre").val(),
	apellido = $("#apellido").val(),
	edad = $("#edad").val(),

	//"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
	datos = {"nombre":nombre, "apellido":apellido,"edad":edad};

	$.ajax({
		url: "datos.php",
		type: "POST",
		data: datos
	}).done(function(respuesta){
		if (respuesta.estado === "ok") {
			console.log(JSON.stringify(respuesta));

			var nombre = respuesta.nombre,
			apellido = respuesta.apellido,
			edad = respuesta.edad;

			$(".respuesta").html("Servidor:<br><pre>"+JSON.stringify(respuesta, null, 2)+"</pre>");
		}
	});
});
</script>

</body>
</html>