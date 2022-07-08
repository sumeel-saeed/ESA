<html>
  <head>
  <title>european space agency</title>
  </head>
  <body>
  <h1>european space agency</h1>
  <hr>
  <p>choose an option below:</p>
  <a href="index.php">homepage</a> | 
  <a href="addastronaut.php">add a astronaut</a> | 
     <a href="addmission.php">add a mission</a> | 
     <a href="addtarget.php">add a target</a> | 
     <a href="seeastronauts.php">see all astronauts</a>
     <a href="seemission.php">see all mission</a> |
     <a href="seetargets.php">see all targets</a> |
  <hr>
  <h3> see all targets</h3>
  
  <?php
  // this is the database code that is created for esa and connected to mysqli which also contains a if statement. 
  $host ="localhost";
   $username ="root";
   $password ="";
   $database_name ="esa";
   $link = mysqli_connect($host, $username, $password, $database_name);
    if($link === false) {
	die("Error: could not connect");		
	}
	?>
	 <table>
	 <tr>
	   <th width="100px">targets id<br><hr></th>
	   <th width="300px">targets name <br><hr></th>
	   <th width="300px">first mission <br><hr></th>
	   <th width="300px">targets type  <br><hr></th>
	   <th width="300px">no missions <br><hr></th>
	   
       </tr>
	   <?php
	   // this code is for the target id which has different inputs and whatever we saved we can go through with this and also connected mysqli query with the echo statement.
	   $sql =mysqli_query($link, "SELECT target_id, target_name, first_mission, target_type, no_mission FROM target");
	   while ($row =$sql->fetch_assoc()){
		   echo "
		   <tr>
		   <th>{$row['target_id']}</th>
	<th>{$row['target_name']}</th>
	<th>{$row['first_mission']}</th>
	<th>{$row['target_type']}</th>
	<th>{$row['no_mission']}</th>
	</tr>
	";
	   }
	   ?>
	   </table>
	<?php
	// this is the closing code of mysqli.
	 mysqli_close($link);
   ?>
   </body>
   </html>