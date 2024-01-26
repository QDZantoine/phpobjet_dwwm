<?php
class ArticleManager extends Manager{
    function update($data,$id){
        $this->updateTable('article',$data,$id);
    }


    function insert($data){
        $this->insertTable('article', $data);
    }


        function getDescribe(){
        $result=$this->getDescribeTable('article'); 
        return $result;

    }

    function findById($id,$type='array'){
        $result=$this->findByIdTable('article',$id);
        if($type!='array'){
            $obj=new Article($result);
        return $obj;
        }else{
            return $result;
    }}


    // function find($id,$type='obj'){
    //     $resultat=$this->findByIDTable('article',$id);
    //     if($type=='obj'){
    //         $obj=new Article($resultat);
    //         return $obj;
    //     }else{
    //         return $resultat;
    //     }
    // }

    function deleteById($id){
        $this->deleteByIdTable('article',$id);
    }
    
    function findAll(){
        $result=$this->listTable('article');
        return $result;
    }

   
}