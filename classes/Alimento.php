<?php
  
  class Alimento extends Prodotto{
    private $haccp;
    private $data_di_scadenza;
    private $type;

    public function __construct($name,$price,$haccp,$data_di_scadenza)
    {
      parent:: __construct($name,$price);
      $this->haccp = $haccp;
      $this->data_di_scadenza = $data_di_scadenza;
      
    }
    
    /**
     * Get the value of haccp
     */ 
    public function getHaccp()
    {
        return $this->haccp;
    }

    /**
     * Set the value of haccp
     *
     * @return  self
     */ 
    public function setHaccp($haccp)
    {
        $this->haccp = $haccp;

        return $this;
    }

    /**
     * Get the value of data_di_scadenza
     */ 
    public function getData_di_scadenza()
    {
        return $this->data_di_scadenza;
    }

    /**
     * Set the value of data_di_scadenza
     *
     * @return  self
     */ 
    public function setData_di_scadenza($data_di_scadenza)
    {
        $this->data_di_scadenza = $data_di_scadenza;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
  }
  
?>