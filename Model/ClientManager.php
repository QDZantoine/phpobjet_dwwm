<?php
class ClientManager extends Manager
{

    function getDescribe()
    {
        $result = $this->getDescribeTable('client');
        return $result;
    }

    function findById($id, $type = 'obj')
    {
        $result = $this->findByIdTable('client', $id);
        if ($type == 'obj') {
            $objet = new Client($result);
            return $objet;
        } else {
            return $result;
        }
    }



    // function find($id,$type='obj'){
    //     $resultat=$this->findByIDTable('client',$id);
    //     if($type=='obj'){
    //         $obj=new client($resultat);
    //         return $obj;
    //     }else{
    //         return $resultat;
    //     }
    // }

    function deleteById($id)
    {
        $this->deleteByIdTable('client', $id);
    }

    function findAll()
    {
        $result = $this->listTable('client');
        return $result;
    }
}
