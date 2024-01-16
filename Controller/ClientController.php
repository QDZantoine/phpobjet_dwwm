<?php

class ClientController extends MyFct
{
    function __construct()
    {
        $action = 'list';
        extract($_GET);
        switch ($action) {
            case 'list':
                $this->listerClient();
                break;
            case 'show':
                $this->afficherClient($id);
                break;
            case 'insert':
                $this->insererClient();
                break;
            case 'update':
                $this->modifierClient($id);
                break;
            case 'delete':
                $this->supprimerClient($id);
                break;
            case 'save':
                $this->sauvegarderClient($_POST);
                break;
        }
    }
    //-------------My functions----------------------------------------------------
    function sauvegarderClient($data)
    {
        $cm=new ClientManager();
        $connexion=$cm->connexion();
        extract($data);
        $id=(int) $id;//transform $id into integer  value
        if($id!==0){ //case modification
            $sql="update client set numClient=?,nomClient=?,adresseClient=? where id=?";
            $requete=$connexion->prepare($sql);
            $requete->execute([$numClient,$nomClient,$adresseClient,$id]);
        }else{   //case insertion
            $sql="insert into client (numClient,nomClient,adresseClient) values (?,?,?)";
            $requete=$connexion->prepare($sql);
            $requete->execute([$numClient,$nomClient,$adresseClient]);
        }
        //redirection to the page list client
        header('Location:client');
    }
    function insererClient()
    {
        $variables = [

            'id' =>'' ,
            'numClient' =>'' ,
            'nomClient' => '',
            'adresseClient' =>'' ,
            'disabled' => '',
        ];
        $file = "View/client/form.html.php";
        $this->generatePage($file, $variables);

    }

    function supprimerClient($id)
    {
        $cm = new ClientManager();
        $cm->deleteById($id);
        header('Location: client');
        exit;
    }
    function modifierClient($id)
    {
        $cm = new ClientManager();
        $client = $cm->findById($id);
        //---------prepare parameters----
        $variables = [

            'id' => $client->getId(),
            'numClient' => $client->getNumCLient(),
            'nomClient' => $client->getNomClient(),
            'adresseClient' => $client->getAdresseClient(),
            'disabled' => '',
        ];
        $file = "View/client/form.html.php";
        $this->generatePage($file, $variables);
    }

    function afficherClient($id)
    {

        $cm = new ClientManager();
        $client = $cm->findById($id); // prepare the bariables to send to th ahtml page
        // $this->Printr($client);
        $variables = [
            'id' => $client->getId(),
            'numClient' => $client->getNumClient(),
            'nomClient' => $client->getNomClient(),
            'adresseClient' => $client->getAdresseClient(),
            'disabled' => 'disabled',
        ];
        $file = "View/client/form.html.php";
        $this->generatePage($file, $variables);
    }

    function listerClient()
    {
        $cm = new ClientManager();
        $clients = $cm->findAll();
        $variables = [
            'lignes' => $clients,
            'nbre' => count($clients),
        ];
        $file = "View/client/list.html.php";
        $myFct = new MyFct();
        $myFct->generatePage($file, $variables);
    }
}
