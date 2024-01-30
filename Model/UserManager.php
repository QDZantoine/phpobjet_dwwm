<?php
class UserManager extends Manager
{
    public function findAllByCondition($dataCondition=[],$order='',$type='obj'){
        return $this->findAllByConditionTable('user',$dataCondition,$order,$type);
    }
    public function findOneByCondition($dataCondition=[],$type='obj'){
        return $this->findOneByConditionTable('user',$dataCondition,$type);
    }
    function search($columnLikes,$word){
        return $this->searchTable('user',$columnLikes,$word);
    }

    function update($data,$id){
        $this->updateTable('user',$data,$id);
    }

    function insert($data){
        $this->insertTable('user', $data);
    }

    function getDescribe()
    {
        $result = $this->getDescribeTable('user');
        return $result;
    }

    function findById($id, $type = 'obj')
    {
        $result = $this->findByIdTable('user', $id);
        if ($type == 'obj') {
            $objet = new User($result);
            return $objet;
        } else {
            return $result;
        }
    }



    // function find($id,$type='obj'){
    //     $resultat=$this->findByIDTable('user',$id);
    //     if($type=='obj'){
    //         $obj=new user($resultat);
    //         return $obj;
    //     }else{
    //         return $resultat;
    //     }
    // }

    function deleteById($id)
    {
        $this->deleteByIdTable('user', $id);
    }

    function findAll()
    {
        $result = $this->listTable('user');
        return $result;
    }
    public function statisticVente(){
        
    }
}
