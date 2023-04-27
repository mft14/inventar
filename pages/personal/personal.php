    <?php
	$db_adresse = mysqli_connect('localhost', 'root', '', 'inventurdatenbank');
	
	if(!$db_adresse)
	{
		die ("<p> FEHLER!!!</p>");
	}

     if(isset($_POST["file"])){
        
        $filename=$_FILES["file"]["tmp_name"];    
         
		 if($_FILES["file"]["size"] > 0)
         {
            $fileVar = fopen($filename, "r");
			$count = 0;
              while (($getData = fgetcsv($fileVar, 200, ";")) !== FALSE)
               {
				if ($count === 0)
				{
					$count = 1;
				} else 
				{
                 $sql = "INSERT into mitarbeiter (personalnummer, name, vorname, abteilung_id) 
                       values ('".$getData[0]."','".$getData[1]."','".$getData[2]."',
					   (SELECT abteilung.abteilung_id FROM abteilung WHERE bezeichnung = '".$getData[3]."')) ON DUPLICATE KEY UPDATE personalnummer='".$getData[0]."', name='".$getData[1]."', vorname = '".$getData[2]."', abteilung_id = (SELECT abteilung.abteilung_id FROM abteilung WHERE bezeichnung = '".$getData[3]."')";
					   $result = mysqli_query($db_adresse, $sql);		   		   	   
				}
			   }
          
		  fclose($fileVar);  
         }
      }   
     ?>