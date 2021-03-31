<!DOCTYPE html>
<html>
<head>
	<title>PLANTILLA</title>
	<meta charset="utf-8">
</head>
<body>

	<header>
<h1>TITULO DE PAGINA</h1>

<?php

include "views/modules/navegacion.php";

?>

	</header>

	<section>
		<?php
		$mvc = new MvcCOntroller();
		$mvc -> enlacesPaginasController();
		?>
	</section>

</body>
</html>