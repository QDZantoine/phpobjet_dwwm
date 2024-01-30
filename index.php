<?php
 session_start();
//----- debugging see errors------------------

 error_reporting(E_ALL & ~E_DEPRECATED); 
 ini_set("display_errors", 1); 

//----see the max size file_uploading-------------------

//  $max=ini_get("upload_max_filesize");
//  echo $max; die;

 if(!$_SESSION){   //    la variable $_SESSION est encore vide ====  $_SESSION=[];
     $_SESSION['username']='user';
     $_SESSION['roles']=json_encode(['ROLE_USER']);
     $_SESSION['bg_navbar']='bg_red';
 }

//use it for debugging
require_once("Service/extra.php");
spl_autoload_register('charger'); // spl_autoload_register load automatically the function called 
$path='home'; //init the variable $path
extract($_GET); // generating the variables with the index of $_GET.Exemple $path,$action,$id ,...
$nameController=ucfirst($path).'Controller';//generating the name of the controller  with $path. for exemple if $path="article" so $nameController="ArcticleController" 
$fileController="Controller/$nameController.php";//generating the path of the file that match with the controller
if (file_exists($fileController)){ //Testing if the file exist , and if it's not the case we print the phrase that the file doesn't exist
    $page=new $nameController();

}else{
    echo "<h1>Le fichier $fileController n'existe pas !</h1>";
    die;
}