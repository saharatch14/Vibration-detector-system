<?php
       // Includs database connection
	include "db_connect.php";
	
	// Makes query with rowid
	$query = "SELECT * FROM Information";
		
	// Run the query and set query result in $result
	// Here $db comes from "create_db.php"
	$result = $db->query($query);

          if (count($result) > 0) {
		  // output data of each row
                  while($row = $result->fetchArray()) {
           //table
			  echo "<tr>";
			  echo "<td>" .$row["Status"].  "</td>  ";	       	
			  echo "<td>" .$row["time"]. "</td>  ";
                          echo "</tr>";
           }    
        } else { echo ""; }
       $db->close();
?>


