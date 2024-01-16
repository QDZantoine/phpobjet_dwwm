<?php
class Article extends ArticleManager
{

    private $id;
    private $numArticle;
    private $designation;
    private $prixUnitaire;

    /*----------------the functions------------------*/

    /**
     * Get the value of id
     */
    public function __construct($data = [])
    {
        if ($data) {
            foreach ($data as $key => $value) {
                //creation of a function set
                $set = "set" . ucfirst($key);
                //case when $key='numArticle' then $set="setNumArticle"
                if (method_exists($this, $set)) {
                    $this->$set($value);
                }
            }
        }


        // if ($data) { //if ($data!=[])
        //     $this->setId($data['id']);
        //     $this->setNumArticle($data['numArticle']);
        //     $this->setDesignation($data['designation']);
        //     $this->setPrixUnitaire($data['prixUnitaire']);
        // }

        // $this->setId(1);
        // $this->setNumArticle('BB00012');
        // $this->setDesignation('Biere leffe 33cl ');
        // $this->setPrixUnitaire(5.0);
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of numArticle
     */
    public function getNumArticle()
    {
        return $this->numArticle;
    }

    /**
     * Set the value of numArticle
     *
     * @return  self
     */
    public function setNumArticle($numArticle)
    {
        $this->numArticle = $numArticle;

        return $this;
    }

    /**
     * Get the value of designation
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @return  self
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of prixUnitaire
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set the value of prixUnitaire
     *
     * @return  self
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }
}
