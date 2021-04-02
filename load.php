<?php
require 'functions.php';
$connect = dataBase('gallery', 'root', '');

if(!$connect){
	die('No se pudo conecta  la base de datos');
} 

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
	$tmp_name = $_FILES['picture']['tmp_name'];
	$imageName = $_FILES['picture']['name'];
	if(check($tmp_name)){
		$uploadFile = 'img/'. $imageName;
		move_uploaded_file($tmp_name, $uploadFile);
		$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
		$text = filter_var($_POST['description'], FILTER_SANITIZE_STRING);


		$stm = $connect->prepare('INSERT INTO pictures(id,title,image,description) VALUES(null,:title,:image,:description)');
		$stm->execute(array(':title' => $title, ':image' => $imageName, ':description' => $text));

		header('Location: index.php');
	

	}else{
		$error = 'El archivo no es una imagen o es muy pesado';
	}

}


require 'views/load.view.php';
?>