<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Mi Increíble Galería en PHP</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"><?php if(empty($array['title'])){
				echo $array['image'];
			}else{
				echo $array['title'];
			} ?></h1>
		</div>
	</header>

	<div class="contenedor">

		<div class="foto">
			<img src="img/<?php echo $array['image']; ?>" alt="Imagen">
			<p class="texto"></p>
			<a class="regresar" href="index.php"><i class="fa fa-long-arrow-left"></i>Regresar</a>
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada por Carlos Arturo - FalconMasters</p>
	</footer>
</body>
</html>