<?php
  require_once __DIR__ ."/User.php";

  class Premium extends User{
    private $discount = 10;
    private $points;
    
    public function __construct($_name,$_surname,$_email,$points)
    {
      parent:: __construct($_name,$_surname,$_email);
      $this->setPoints($points);
      try{ $this->setPoints($points);
      }catch(Exception $e){
        echo $e->getMessage();
      }
      if($this->points > 500 ){
        $this->discount = 60;
        $this->points -= 500;
      }elseif($this->points > 300 ){
        $this->discount = 40;
        $this->points -= 300;
      }elseif($this->points > 100 ){
        $this->discount = 20;
        $this->points -= 100;
      }
    }

    public function setPoints($points){
      if(!is_int($points)){
        throw new Exception("non hai inserito un numero, sei un coglione!!11!");
      }else{
        $this->points = $points;
      }
  
    }    
  
    /**
     * Get the value of points
     */ 
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }
  }



?>