<?php
 error_reporting(E_ALL & ~E_DEPRECATED); 
 ini_set("display_errors", 1); 

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