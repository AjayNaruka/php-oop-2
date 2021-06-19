<?php


  class Guest{

    private $id;
    static $counter = 1;


    public function __construct()
    {
      $this->setId(self::$counter++);
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
    public function setId($_id)
    {
        $this->id = $_id;

        return $this;
    }
  }



?>