<?php
require 'functions.php';

$connect = dataBase('gallery', 'root', '');

if(!$connect){
	die('No se pudo establecer la conexión');
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
	header('Location: index.php');
}else{
	$stm = $connect->prepare("SELECT * FROM pictures WHERE id=:id LIMIT 1");

	$stm->execute(array(':id' => $id));

	$array = $stm->fetch();

	if(!$array){
		header('Location: index.php');
	}
}





require 'views/picture.view.php';
?>