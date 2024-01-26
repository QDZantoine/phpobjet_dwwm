<?php
 error_reporting(E_ALL & ~E_DEPRECATED); 
 ini_set("display_errors", 1); 
require_once("Service/extra.php");
spl_autoload_register('charger');
$cm=new ClientManager;
$columnLikes=['numClient','nomClient','adresseClient'];
$word="a";
$clients=$cm->search($columnLikes,$word);
$MyFct=new MyFct;
$MyFct->printr($clients);
// $data=[
//     "id"=>5,
//     "numClient"=>"CLT4588",
//     "nomClient"=>"Pierrot",
//     "adressClient"=>"niort",
// ];
// $id=5;
// $cm->update($data,$id);

