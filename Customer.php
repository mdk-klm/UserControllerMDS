<?php

class Customer extends User{
    
 protected $adress;
 protected $has_paid = true;


 function __construct($name, $firstname, $birthday=null, $adress)
    {
  parent::__construct($name, $firstname, $birthday, $hair_color);
   $this->adress = $adress;
   $this->has_paid= true;
    }
}

?>