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
  <h3> see all missions</h3>
  
  <?php
  // this is database code that created for esa and it is connected to the mysqli and it has if statement like if you will give any wrong information you will get a error.
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
	   <th width="100px">missions id<br><hr></th>
	   <th width="300px">missions name <br><hr></th>
	   <th width="300px">missions destination <br><hr></th>
	   <th width="300px">launch date <br><hr></th>
	   <th width="300px">missions type <br><hr></th>
	   <th width="300px">astronaut id <br><hr></th>
	   <th width="300px">target id <br><hr></th>
	   <th width="300px">crew size <br><hr></th>
       </tr>
	   <?php
	   // this code is for the seemission and we can check all the thing here we submitted and it is also connected to mysqli query.
		// if we put any wrong thing we will not get a result.
	   $sql =mysqli_query($link, "SELECT mission_id, mission_name, mission_destination, launch_date, mission_type, astronaut_id, target_id, crew_size FROM mission");
	  
	   while ($row =$sql->fetch_assoc()){
		   echo "
		   <tr>
		   <th>{$row['mission_id']}</th>
		<th>{$row['mission_name']}</th>
		<th>{$row['mission_destination']}</th>
		<th>{$row['launch_date']}</th>
		<th>{$row['mission_type']}</th>
		<th>{$row['astronaut_id']}</th>
		<th>{$row['target_id']}</th>
		<th>{$row['crew_size']}</th>
		
	</tr>
	";
	   }
	   ?>
	   </table>
	<?php
	// this is a code to close the mysqli.
	 mysqli_close($link);
   ?>
   </body>
   </html>