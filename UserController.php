<?php
include_once('Model/User.php');
include_once('Model/Customer.php');

class UserController {

    
    public static function getUser(){

        $user1 = new User ('georges', 'moustaki', '21/04/1993', 'blond');
        $user2 = new User ('robert', 'loubard', '14/12/2004', 'roux');


        return [
         
           $user1->__serialize(),
           $user2->__serialize(),
           $user2->__toString()
           
         
        ];
 


        }
    
}


?>