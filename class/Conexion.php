<?php
			
		 $host ='localhost';
		 $dbname ='cooperativaPOO';
		 $username ='postgres';
		 $password ='';
		 $db = null;
		
		try {	  
				$db = new PDO("pgsql:host=$host dbname=$dbname",$username, $password );
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}catch(PDOException $e){
				
					echo "ERROR: " . $e->getMessage();
				
		}

		$algo=$db->prepare("SELECT * FROM tipo");
		$algo->execute();
		
		
		
			
		

	
?>

