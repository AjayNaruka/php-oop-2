<?php

  require_once __DIR__ ."/Guest.php";

  class User extends Guest{ 
    private $name;
    private $surname;
    private $age;
    private $email;
    private $phone;
    public $card = [
      "circuito" => "",
      "data" => "", 
      "codice" => "",
      "cvc" => "",
    ];

    public function checkDate($_data){
      $date1=date_create($_data);
      $now = date_create();
      $diff=date_diff($now,$date1);
      if($diff->format("%R%a") < 0) {
        throw new Exception("Carta scaduta per user $this->name $this->surname <br>");
      }
      return $diff->format("%R%a");
    } 

    /* public function setCard2($_circuito,$_data,$_codice,$_cvc){
      $this->card["circuito"] = $_circuito;
        $this->card["data"] = $_data;
        $this->card["codice"] = $_codice;
        $this->card["cvc"] = $_cvc;
    } */
    public function setCard($_circuito,$_data,$_codice,$_cvc ){
      try {
        $this->checkDate($_data);
        $this->card["circuito"] = $_circuito;
        $this->card["data"] = $_data;
        $this->card["codice"] = $_codice;
        $this->card["cvc"] = $_cvc;
      }catch(Exception $e){
        echo $e-> getMessage();
    }

    }public function __construct($_name,$_surname,$_email)
    {
      parent::__construct();
      $this->setName($_name);
      $this->setSurname($_surname);
      $this->setEmail($_email);
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
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
      if(!is_int($age)){
        throw new Exception("non hai inserito un numero, sei un coglione!!11!");
      }else{
        $this->age = $age;     
      }
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
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of card
     */ 
    public function getCard($key)
    {
        return $this->card[$key];
    }
    public function getCircuito(){
      return $this->card["circuito"];
    }
  }
  
  
  

?>