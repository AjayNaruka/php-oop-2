<?php

  require_once __DIR__ ."/Prodotto.php";

  class Abbigliamento extends Prodotto{
    private $misura;
    private $materiale;
    private $genere;
    private $categoria;

    public function __construct($name,$price,$categoria,$genere)
    {
      parent:: __construct($name,$price);

      $this->setCategoria($categoria);
      $this->setGenere($genere);
    }
    

    /**
     * Get the value of misura
     */ 
    public function getMisura()
    {
        return $this->misura;
    }

    /**
     * Set the value of misura
     *
     * @return  self
     */ 
    public function setMisura($misura)
    {
        $this->misura = $misura;

        return $this;
    }

    /**
     * Get the value of materiale
     */ 
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     *
     * @return  self
     */ 
    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }

    /**
     * Get the value of genere
     */ 
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * Set the value of genere
     *
     * @return  self
     */ 
    public function setGenere($genere)
    {
        $this->genere = $genere;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
  }



?>