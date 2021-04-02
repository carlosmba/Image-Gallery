<?php


function dataBase($database,$user,$pass){

	try{
	 	$connect = new PDO("mysql:host=localhost;dbname=$database", $user, $pass);
	 	return $connect;
	}catch(PDOException $e){
		echo 'Error: '. $e->getmessage();
		return false;
	}
}


	function check($path)
    {
        $imageSizeArray = getimagesize($path);
        $imageTypeArray = $imageSizeArray[2];
        return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }



?>