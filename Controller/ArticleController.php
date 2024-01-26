<?php

class ArticleController extends MyFct{
    public function __construct()
    {
        $action='list';
        extract($_GET);
        switch($action){
            case 'list':
                $am=new ArticleManager();
                $articles=$am->findAll();
                $file="View/article/list.html.php";
                $this->generatePage($file,['articles'=>json_encode($articles)]);
                break;
        }
        
    }
    //-------------My functions----------------------------------------------------
    

}