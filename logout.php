<?php
   $host ='localhost';
   $dbname ='cooperativa';
   $username ='postgres';
   $password ='';
  try{ 
   $db = new PDO('pgsql:host='.$host .';dbname='.$dbname.'', $username, $password );
   
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   }catch(PDOException $e){
   
       echo "ERROR: " . $e->getMessage();
   
   }
?>
