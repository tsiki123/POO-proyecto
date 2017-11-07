<?php
   $host ='ec2-54-83-53-8.compute-1.amazonaws.com';
   $dbname ='d2te8etm6b5ltc';
   $username ='srkjgsmibckvlm';
   $password ='5c660885f3d01875623021c2e3b2ea56fb6614db7f58022cc80f4ef66cb996d6';
  try{ 
   $db = new PDO('pgsql:host='.$host .';dbname='.$dbname.'', $username, $password );
   
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   }catch(PDOException $e){
   
       echo "ERROR: " . $e->getMessage();
   
   }
?>