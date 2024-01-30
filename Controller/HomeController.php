<?php

class HomeController
{
    public function __construct()
    {
        $file = "View/portfolio/portfolio.html.php";
        $myFct = new MyFct();
        $myFct->generatePage($file);
    }
    //-------------My functions----------------------------------------------------


}
