<?php
require 'functions.php';

$postPag = 8;
$pag = isset($_GET['pag']) ? (int)$_GET['pag'] : 1;
$start = ($pag > 1) ? $pag * $postPag - $postPag : 0;

$connect = dataBase('gallery', 'root', '');
if(!$connect){
	die();
}

$stm = $connect->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM pictures LIMIT $start, $postPag");
$stm->execute();
$array = $stm->fetchAll();

if(!$array){
	header('Location: index.php');
} 

$stm = $connect->prepare('SELECT FOUND_ROWS()');
$stm->execute();
$rows = $stm->fetch();
$totalPag = ceil($rows['FOUND_ROWS()'] / $postPag);

require 'views/index.view.php';
?>