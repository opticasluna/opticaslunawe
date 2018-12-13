<Location "/">
  AllowMethods GET POST OPTIONS
</Location>
<?php
<Location "/">
  AllowMethods GET POST OPTIONS
</Location>
$nombre = $_POST['nombre'];
$apeido = $_POST['apeido'];
$edad = $_POST['edad'];
$sucursal = $_POST['sucursal'];
$hora = $_POST['hora'];
$dia = $_POST['dia'];


echo "Su cita Sr(a). ".$nombre." ".$apeido." se agendo en la fecha: ".$dia." a las: ".$hora." en la sucursal: ".$sucursal;
$mensaje = "Cliente: ".$nombre." ".$apeido." Edad: ".$edad."agenda para el ".$dia." a las:".$hora." en su sucursal: ".$sucursal;
$asunto = "Nueva Cita";
if(mail('ormesi@live.com', $asunto, $mensaje))
	{
	echo "mail enviado";
	}

	echo "Cita agendada";




?>
<form method="post" action="index.html">
<input type="submit" value="Listo">
