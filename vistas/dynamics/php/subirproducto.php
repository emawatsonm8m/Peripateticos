<!DOCTYPE html>
    <head>
		<title>Formulario para lugares y horarios de venta</title>
</head>
<body>
    <h1>
    </h1>
    <form action="./ventasusuario.php" method="post" target"_blank">
    <fieldset>		
			<legend>Lugares de entrega (hasta 5)</legend>
			<label for"Lugar">Lugar:
			<input id="Lugar" name="l1"type="text" require><br><br>
			<label for"Lugar">Lugar:
			<input id="Lugar" name="l2" type="text" require><br><br>
			<label for"Lugar">Lugar:
			<input id="Lugar" name="l3" type="text"><br><br>
			<label for"Lugar">Lugar:
			<input id="Lugar" name="l4" type="text"><br><br>
			<label for"Lugar">Lugar:
			<input id="Lugar" name="l5"type="text"><br><br>
			<button>Borrar</button>
			<button>Enviar</button>
			<?php
			$dato =$_POST
			?>
		</fieldset>  
    </form>
</body>
</html> 
