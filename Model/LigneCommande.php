<?php
class LigneCommande extends Manager
{

    private $id;
    private $quantite;

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
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
}
