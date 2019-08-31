<?php
require 'database.php';
if (!empty($_GET['id'])) 
  {  
        $id = checkInput($_GET['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM tips_item WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: ./galery-tips.php"); 
    } 


    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    } 
 ?>