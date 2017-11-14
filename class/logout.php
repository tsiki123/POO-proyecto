<?php
   $host ='ec2-107-22-235-167.compute-1.amazonaws.com';
   $dbname ='d5gjn5glnttjlc';
   $username ='gvdiiqwddyewan';
   $password ='d786734864c2bfa3eee8a82eca6c67c8f24b9892d4619dd8347c366d16f1b151';
  try{ 
   $db = new PDO('pgsql:host='.$host .';dbname='.$dbname.'', $username, $password );
   
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   }catch(PDOException $e){
   
       echo "ERROR: " . $e->getMessage();
   
   }
?>
