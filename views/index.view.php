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
			<h1 class="titulo">Mi Increíble Galería en PHP y MySQL</h1>
		</div>
	</header>

	<div class="fotos">
		<div class="contenedor">
		<?php foreach($array as $image) : ?>
			<div class="thumb">
				<a href="picture.php?id=<?php echo $image['id']?>">
					<img src="img/<?php echo $image['image'] ?>" alt="imagen">
				</a>
			</div>
		<?php endforeach; ?>
		

				<div class="paginacion">
					<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina anterior -->
				<?php if($pag>1) : ?>
					<a href="?pag=<?php echo $pag - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<?php endif; ?>

					<!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina siguiente -->
				<?php if($totalPag != $pag) : ?>
							<a href="?pag=<?php echo $pag + 1 ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif; ?>
				</div>
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada por Carlos Mendoza - CARLOS_AMB</p>
	</footer>
</body>
</html>