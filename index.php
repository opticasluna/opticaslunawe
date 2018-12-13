<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		label
		{
			width: 70px;
			display: inline-block;
		}
	</style>
</head>
<body>

	<form method="post" action="pagina2.php">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre"><br>

		<label for="asunto">Asunto:</label>
		<input type="text" name="asunto" id="asunto"><br>

		<label for="mensaje">Mensaje:</label>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>

		<input type="submit">
	</form>


</body>
</html>