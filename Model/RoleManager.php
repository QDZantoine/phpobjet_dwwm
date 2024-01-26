<?php
class RoleManager extends Manager
{
    function search($columnLikes,$word){
        return $this->searchTable('role',$columnLikes,$word);
    }

    function update($data,$id){
        $this->updateTable('role',$data,$id);
    }

    function insert($data){
        $this->insertTable('role', $data);
    }

    function getDescribe()
    {
        $result = $this->getDescribeTable('role');
        return $result;
    }

    function findById($id, $type = 'obj')
    {
        $result = $this->findByIdTable('role', $id);
        if ($type == 'obj') {
            $objet = new Role($result);
            return $objet;
        } else {
            return $result;
        }
    }



    // function find($id,$type='obj'){
    //     $resultat=$this->findByIDTable('role',$id);
    //     if($type=='obj'){
    //         $obj=new role($resultat);
    //         return $obj;
    //     }else{
    //         return $resultat;
    //     }
    // }

    function deleteById($id)
    {
        $this->deleteByIdTable('role', $id);
    }

    function findAll()
    {
        $result = $this->listTable('role');
        return $result;
    }
}
