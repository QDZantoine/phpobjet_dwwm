<?php

class User extends UserManager{
    private $id;               
    private $username;         
    private $email;            
    private $password;         
    private $creationDate ;    
    private $modificationDate ;
    private $lastConnexion;    
    private $modifiedDate;     
    private $roles;
    private $photo; 
    function __construct($data = []){
        if ($data){
            foreach ($data as $key=>$value){
                $set="set".ucfirst($key);
                if(method_exists($this,$set)){
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
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of creationDate
     */ 
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set the value of creationDate
     *
     * @return  self
     */ 
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get the value of modificationDate
     */ 
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set the value of modificationDate
     *
     * @return  self
     */ 
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get the value of lastConnexion
     */ 
    public function getLastConnexion()
    {
        return $this->lastConnexion;
    }

    /**
     * Set the value of lastConnexion
     *
     * @return  self
     */ 
    public function setLastConnexion($lastConnexion)
    {
        $this->lastConnexion = $lastConnexion;

        return $this;
    }

    /**
     * Get the value of modifiedDate
     */ 
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set the value of modifiedDate
     *
     * @return  self
     */ 
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get the value of roles
     */ 
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set the value of roles
     *
     * @return  self
     */ 
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
}