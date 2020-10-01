<?php

class User
{
  protected $name;
  protected $firstname;
  protected $birthday;
  protected $hair_color;
  
        
  
   function __construct($name, $firstname, $birthday=null, $hair_color)
  {
    $this->name = $name;
    $this->firstname = $firstname;
    $this->birthday = $birthday;
    $this->hair_color = $hair_color;

  }


  public function __toString()
  {
    return 'je suis ' .$this->name .' ' .$this->firstname;
  }


public function __serialize()
   {
  

  return [

      'name' => $this->name, 
      'firstname' => $this->firstname, 
      'birthday' => $this->birthday, 
      'hair_color' => $this->hair_color
  ];

    }

function getName() {
    return $this->name;
    }

function setName($name) {
    $this->name = $name;
    }

function getFirstName() {
    return $this->firstname;
    }

function setFirstName($firstname) {
    $this->firstname = $firstname;
    }

function getBirthday() {
    return $this->birthday;
    }

function setBirthday($birthday) {
    $this->birthday = $birthday;
    }


function getHair_color()
    {
  return $this->hair_color;
    }

function setHair_color($hair_color)
    {
     $this->hair_color = $hair_color;
    }
}
