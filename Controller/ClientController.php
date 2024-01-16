<?php

class ClientController extends MyFct{
    function __construct()
    {
        $action='list';
        extract($_GET);
        switch($action){
            case 'list':
                $this->listerClient();
                break;
                case 'show':
                $this->afficherClient($id);
                break;



                // $cm=new Client();
                // $clients=$cm->findAll();
                // $file="View/client/list.html.php";
                // $this->generatePage($file,['clients'=>json_encode($clients)]);
                // break;
        }
        
    }
    //-------------My functions----------------------------------------------------
    function listerClient(){
        $cm=new ClientManager();
        $clients=$cm->findAll();
        $variables=[
            'lignes'=>$clients,
            'nbre'=>count($clients),
        ];
        $file="View/client/list.html.php";
        $myFct=new MyFct();
        $myFct->generatePage($file,$variables);
    }
    function afficherClient($id){

    }
}