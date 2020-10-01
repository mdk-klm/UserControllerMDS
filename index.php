<?php
 include_once('Controllers/UserController.php');

 header('Content-Type: application/json');

 $UserController = new UserController();
 echo json_encode
  (
   $UserController::getUser()
   
  );
