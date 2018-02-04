<?php 


$para      = 'josewbmx@gmail.com';
$titulo    = 'Mensaje de la Pagina web casadeoracionmorelia.com';
$mensaje   = "

<html>
<head>
  <title>Mensaje de La Pagina</title>
</head>
<body>



<b>Nombre:</b>". $nombre =  $_POST['nombre'] ."
<br/>
<b>Correo:</b>" . $correo =  $_POST['correo'] ."  
<br/>
<b>Mensaje:</b>" . $mensaje =  $_POST['descripcion'] ."
<br/>

</body>
</html>
";


$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Casa de Oración Morelia <contacto-casadeoracionmorelias@casadeoracionmorelia.com>' . "\r\n";

mail($para, $titulo, $mensaje, $cabeceras);



?>



