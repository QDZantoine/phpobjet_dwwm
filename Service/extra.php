<?php
function charger($class){ /*the parameters $class contetn the name of the class instanced with new*/

$fileModel="Model/$class.php";// if Exemple $class="Article" so $fileModel="Model/ArtiCle.php"*/
$fileController="Controller/$class.php";
$fileService="Service/$class.php";
$fileView="View/$class.php";
$files=[$fileModel,$fileController,$fileService,$fileView];

foreach($files as $file){
    if(file_exists($file)){
        require_once($file);
    }

}
}

function printr($array){
echo "<pre>";
print_r($array);
echo "</pre>";
}
?>