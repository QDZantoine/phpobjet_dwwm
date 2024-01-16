<?php

class Commande extends Manager
{
    private $id;
    private $numCommande;
    private $dateCommande;

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
    }



    /**
     * Get the value of id
     */
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
     * Get the value of numCommande
     */
    public function getNumCommande()
    {
        return $this->numCommande;
    }

    /**
     * Set the value of numCommande
     *
     * @return  self
     */
    public function setNumCommande($numCommande)
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    /**
     * Get the value of dateCommande
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set the value of dateCommande
     *
     * @return  self
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }
}
