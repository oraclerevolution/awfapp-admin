<?php
require 'database.php';
if (!empty($_GET['id'])) 
  {  
        $id = checkInput($_GET['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM speakers WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: ./list_speaker.php"); 
    } 


    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    } 
 ?>