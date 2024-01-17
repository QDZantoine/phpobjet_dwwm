<?php
require_once("Service/extra.php");
spl_autoload_register('charger');

$cm=new ClientManager;
$data=[
    "id"=>5,
    "numClient"=>"CLT4588",
    "nomClient"=>"Pierrot",
    "adressClient"=>"niort",
];
$id=5;
$cm->update($data,$id);

