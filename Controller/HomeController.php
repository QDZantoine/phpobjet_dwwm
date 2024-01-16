<?php

class HomeController
{
    public function __construct()
    {
        $file = "View/accueil/accueil.html.php";
        $myFct = new MyFct();
        $myFct->generatePage($file);
    }
    //-------------My functions----------------------------------------------------


}
