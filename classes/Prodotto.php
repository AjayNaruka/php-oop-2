<?php

  class Prodotto{
    protected $name;
    protected $info;
    protected $voto;
    protected $price; 

    public function __construct($name,$price)
    {
      $this-> setName($name);
      $this-> setPrice($price);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of info
     */ 
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     *
     * @return  self
     */ 
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of voto
     */ 
    public function getVoto()
    {
        return $this->voto;
    }

    /**
     * Set the value of voto
     *
     * @return  self
     */ 
    public function setVoto($voto)
    {
        $this->voto = $voto;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
  }


?>